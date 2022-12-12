<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Cache;

class PendidikanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('pendidikan', compact('kecamatan'));
    }
    
    public function pendidikan(Request $request, $type)
    {
        $removedKeys = ['status', 'Master_Dimensi', 'Master_Subdimensi', 'message'];
        $population = ['label'=> [], 'count' => [] ];
        $seconds = 60 * 50;

        $cacheKey = "{$type}-{$request->kecamatan}-{$request->kelurahan}";
        $data = Cache::remember($cacheKey, $seconds, function () use ($request, $type) {
            $namaKecamatan = optional(Kecamatan::where('id', $request->kecamatan))->value('nama');
            $namaKelurahan = optional(Kelurahan::where('id', $request->kelurahan))->value('nama');
            $jenjang = ['SD', 'SMP', 'SMA'];

            $client = new \GuzzleHttp\Client();
            $md5 = md5('CMSDataWaReHoUse'.str_replace('-','',Carbon::now()->toDateString()));
            foreach ($jenjang as $key => $value) {
                $response = $client->request('GET', 'https://cms.depok.go.id/Api/'. $type .'?Auth='. $md5 .'&kecamatan='.$namaKecamatan .'&kelurahan='. $namaKelurahan . '&tahun=&jenjang='. $value .'&semester=2019/2020%20Ganjil' .'&Limit=&Offset=');
                $education[$value] =  json_decode($response->getBody()->getContents(), true)['data'];
            }
            return $education;
        });
        if ($request->kelurahan == "0") {
            $newData = collect($data)
                ->map(function ($kelurahan) {
                    return collect($kelurahan)->sum('jumlah');
                });

            $population['label'] = $newData->keys()->all();
            $population['count'] = $newData->values()->all();
        } else {
            foreach ($data as $key => $value) {
                $population['label'][] = $key;
                $population['count'][] = $value[0]['jumlah'] ?? 0;
            }
        }

        return $population;
    }
}
