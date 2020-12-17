<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Kecamatan;
use App\Kelurahan;
use Illuminate\Support\Facades\Cache;

class PendudukController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('demografi', compact('kecamatan'));
    }
    
    public function demografi(Request $request, $type)
    {
        $removedKeys = ['status', 'Master_Dimensi', 'Master_Subdimensi', 'message'];
        $population = ['label'=> [], 'count' => [] ];
        $seconds = 60 * 50;

        $cacheKey = "{$type}-{$request->kecamatan}-{$request->kelurahan}";
        $data = Cache::remember($cacheKey, $seconds, function () use ($request, $type) {
            $namaKecamatan = optional(Kecamatan::where('id', $request->kecamatan))->value('nama');
            $namaKelurahan = optional(Kelurahan::where('id', $request->kelurahan))->value('nama');

            $client = new \GuzzleHttp\Client();
            $md5 = md5('CMSDataWaReHoUseK3PeNduDukaN'.str_replace('-','',Carbon::now()->toDateString()));
            $response = $client->request('GET', 'https://cms.depok.go.id/Api/Penduduk?Auth='. $md5 .'&kecamatan='.$namaKecamatan .'&kelurahan='. $namaKelurahan .'&dimensi='. $type .'&subdimensi=&Limit=&Offset=');
            return json_decode($response->getBody()->getContents(), true);
        });

        if ($request->kelurahan == "0") {
            $newData = collect($data['data'])
                ->groupBy('subdimensi')
                ->map(function ($kelurahan) {
                    return $kelurahan->sum('jumlah');
                });

            $population['label'] = $newData->keys()->all();
            $population['count'] = $newData->values()->all();
        } else {
            foreach ($data['data'] as $key => $value) {
                $population['label'][] = $value['subdimensi']; 
                $population['count'][] = $value['jumlah'];
            }
        }

        return $population;
    }
}
