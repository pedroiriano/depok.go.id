<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Kecamatan;
use App\Kelurahan;

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
        $kecamatan = Kecamatan::findOrFail($request->kecamatan);
        $kelurahan = kelurahan::findOrFail($request->kelurahan);
        $population = ['label'=> [], 'count' => [] ];


        $client = new \GuzzleHttp\Client();
        $md5 = md5('CMSDataWaReHoUseK3PeNduDukaN'.str_replace('-','',Carbon::now()->toDateString()));
        $response = $client->request('GET', 'https://cms.depok.go.id/Api/Penduduk?Auth='. $md5 .'&kecamatan='. $kecamatan->nama .'&kelurahan='. $kelurahan->nama .'&dimensi='. $type .'&subdimensi=&Limit=&Offset=');
        $data = json_decode($response->getBody()->getContents(), true);
        foreach ($data['data'] as $key => $value) {
            $population['label'][] = $value['subdimensi']; 
            $population['count'][] = $value['jumlah'];
        }
        return $population;
    }
}
