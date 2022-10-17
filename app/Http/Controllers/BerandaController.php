<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\Cache;
use App\Models\Agenda;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Infografis;
use App\Models\Content;
use App\Models\Kelurahan;
use Vedmant\FeedReader\FeedReader;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private $seconds = 60*60;

    public function index()
    {
        $tanggal = Carbon::now()->format('l, d F');
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::with('services')->orderBy('pos', 'asc')->take(8)->get();
        $agendasToday = Agenda::where('tanggal', Carbon::today())->orderBy('tanggal', 'asc')->take(3)->get();
        $agendasNext = Agenda::whereDate('tanggal', '>', Carbon::today())->orderBy('tanggal', 'asc')->take(2)->get();
        $popup = Slider::where('popup', 1)->first();

        return view('beranda-v1', compact('agendasToday','agendasNext' ,'categories', 'sliders','tanggal', 'popup'));
    }
     public function pimpinanDaerah()
    {
        return view('pimpinan-daerah');
    }
    public function data()
    {
        $tanggalHijriyah  = \GeniusTS\HijriDate\Date::now()->format('d F Y');
        $tanggal = Carbon::now()->format('d F Y');
        $infografis = Infografis::where('status', 1)->get();
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::with('services')->orderBy('pos', 'asc')->take(8)->get();
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        $popup = Slider::where('popup', 1)->first();


        return view('data', compact('agendas', 'categories', 'sliders', 'infografis','tanggal', 'tanggalHijriyah', 'popup'));
    }
    public function agenda()
    {
        $agendas = Agenda::whereDate('tanggal', '>=', Carbon::today())->orderBy('tanggal', 'asc')->paginate(8);
        return view('agenda', compact('agendas'));
    }
    public function content($nama)
    {
        $content = Content::where('slug', $nama)->first();
        if ($content == NULL) {
            abort(404);
        }
        return view('content', compact('content'));
    
    }
    public function layanan()
    {
        $categories = Category::with('services')->orderBy('pos', 'asc')->get();
        return view('layanan', compact('categories'));
    }
    public function infografis()
    {
        $infografis = Infografis::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('infografis', compact('infografis'));
    }
    public function agendaAPI()
    {
        $agendas = Agenda::all();
        return response()->json($agendas);
    }
    public function listPengumuman()
    {

        $pengumuman = Slider::where('status', 1)->orderBy('created_at', 'desc')->paginate(8);
        return view('list-pengumuman', compact('pengumuman'));
    }
    public function pengumuman($url)
    {
        $pengumuman = Slider::where('url', '=', $url)->firstOrFail();
        return view('pengumuman', compact('pengumuman'));
    }
    public function pengumumanAPI()
    {
        $pengumuman = Slider::where('status', 1)->orderBy('created_at', 'desc')->get();
        return $pengumuman;
    }
    public function kependudukanAPI()
    {
        $client = new \GuzzleHttp\Client();
        $md5 = md5('CMSDataWaReHoUseK3PeNduDukaN'.str_replace('-','',Carbon::now()->toDateString()));
        $response = $client->request('GET', 'https://cms.depok.go.id/Api/Penduduk?Auth='. $md5 .'&kecamatan=&kelurahan=&dimensi=Jenis%20Kelamin&subdimensi=&Limit=&Offset=');
        $data = $response->getBody()->getContents();
        $population = json_decode($data, true);
        
        $result = array();
        $result['Pria'] = 0;
        $result['Wanita'] = 0;

        foreach($population['data'] as $key => $data){
            if ($data['subdimensi'] == 'Laki - Laki'){
                $result['Pria'] = $result['Pria'] + $data['jumlah'];
            }else{
                $result['Wanita'] = $result['Wanita'] + $data['jumlah'];
            }
        }
        $result['Jumlah_Penduduk'] = $population['Jumlah_Penduduk'];
        return $result;
    }
    public function getTableHTML($url, $x, $y)
    {
        $htmlContent = file_get_contents($url);
        
        $DOM = new \DOMDocument();
        $DOM->loadHTML($htmlContent);
        
        $Header = $DOM->getElementsByTagName('tr');
        $Detail = $DOM->getElementsByTagName('td');

        foreach($Header as $NodeHeader) 
        {
            $aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
        }
        $i = 0;
        $j = 0;
        foreach($Detail as $sNodeDetail) 
        {
            $dataDetail[$j][] = trim($sNodeDetail->textContent);
            $i = $i + 1;
            $j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
        }
        return $dataDetail[$x][$y];
    }
    public function bphtbAPI()
    {
        $dataBphtb = Cache::remember('data-bphtb', $this->seconds, function(){
            return $this->getTableHTML('http://pbb-bphtb.depok.go.id:8081/Mbphtb/Reports/MonBPHTB.aspx', 2, 14);
        });
        return response()->json($dataBphtb);
    }
    public function pbbAPI()
    {
        $dataPBB = Cache::remember('data-pbb', $this->seconds, function(){
            return $this->getTableHTML('http://pbb-bphtb.depok.go.id:8081/DPBB/V_DASHBOARD/PrintV_DASHBOARDTable.aspx', 1, 10);
        });
        return response()->json($dataPBB);
    }
    public function kesehatanAPI()
    {
        $dataCache = Cache::remember('data-kesehatan', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'http://dsw.depok.go.id/html/penyakitdata', ['verify' => false]);
            return $response->getBody()->getContents();
        });
        $diseases = json_decode($dataCache, true);

        return $diseases;
    }
    public function covidAPI()
    {
        $dataCovid = Cache::remember('data-covid', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://ccc-19.depok.go.id//Data/getWidget', ['verify' => false]);
            $data = $response->getBody()->getContents();
            return $data;
        });
        $covid = json_decode($dataCovid, true);

        return $covid;
    }
    public function pendidikanAPI()
    {
        $dataPendidikan = Cache::remember('data-pendidikan', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $md5 = md5('CMSDataWaReHoUse'.str_replace('-','',Carbon::now()->toDateString()));
            
            $jenjang = ['SD', 'SMP', 'SMA'];
            foreach($jenjang as $key => $value){
                $response = $client->request('GET', 'https://cms.depok.go.id/Api/Sekolah?Auth='. $md5 .'&kecamatan=&kelurahan=&tahun=&jenjang='. $value .'&semester=&Limit=&Offset=');
                $data = $response->getBody()->getContents();
                $result = json_decode($data, true);
                $education[$value] = $result['Count'];
            }
            return $education;
        });
        
        return $dataPendidikan;
    }
        public function cuacaAPI()
    {
        $cuaca = $this->cuaca();
        $suhu['temperature_hariini']        = $this->celcius($cuaca['temperature_current']);
        $suhu['temperature_besok_rendah']   = $this->celcius($cuaca['temperature_besok_rendah']);
        $suhu['temperature_besok_tinggi']   = $this->celcius($cuaca['temperature_besok_tinggi']);
        $suhu['temperature_besok'] = ($suhu['temperature_besok_rendah']+$suhu['temperature_besok_tinggi'])/2;
        $suhu['temperature_lusa_rendah']    = $this->celcius($cuaca['temperature_lusa_rendah']);
        $suhu['temperature_lusa_tinggi']    = $this->celcius($cuaca['temperature_lusa_tinggi']);
        $suhu['temperature_lusa'] = ($suhu['temperature_lusa_rendah']+$suhu['temperature_lusa_tinggi'])/2;
        $suhu['icon_cuaca'] = ['hari_ini' => $this->get_icon($cuaca['icon']['hari_ini']) , 'besok' => $this->get_icon($cuaca['icon']['besok']) , 'lusa' => $this->get_icon($cuaca['icon']['lusa']) , ];
        return array('suhu' => $suhu);
    }
    public function cuacaBMKGAPI()
    {
        $dataCuaca = Cache::remember('data-cuaca', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-JawaBarat.xml');
            $xml = simplexml_load_string($response->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
            return json_encode($xml->forecast->area[11]);
        });
        $array = json_decode($dataCuaca, TRUE);
        $forecast = array();
        $x = 0; $y = 0;
        foreach($array['parameter'][6]['timerange'] as $key => $data){
            if(Carbon::parse($data['@attributes']['datetime'])->gt(Carbon::now())){
                $forecast['suhu'][$x]['icon'] = $this->getIconBMKG($data['value']);
                $x++;
            }
        }
        foreach($array['parameter'][5]['timerange'] as $key => $data){
            if(Carbon::parse($data['@attributes']['datetime'])->gt(Carbon::now())){
                $forecast['suhu'][$y]['time'] = Carbon::parse($data['@attributes']['datetime'])->format('j M, H:i');
                $forecast['suhu'][$y]['value'] = $data['value'][0];
                $y++;
            }
        }
        $forecast['kelembapan'] = $array['parameter'][0]['timerange'][0];
        $forecast['angin'] = $array['parameter'][8]['timerange'][1];
        return $forecast;
    }
    public function getIconBMKG($icon)
    {
        $the_icon = array();
        if ($icon == 0)
        {
            $the_icon['icon'] = 'fas fa-sun';
            $the_icon['desc'] = 'Cerah';
            
            return $the_icon;
        }
        elseif ($icon == 1)
        {
            $the_icon['icon'] = 'fas fa-cloud-sun';
            $the_icon['desc'] = 'Cerah Berawan';
            return $the_icon;
        }
        elseif ($icon == 2)
        {
            $the_icon['icon'] = 'fas fa-cloud-sun';
            $the_icon['desc'] = 'Cerah Berawan';
            return $the_icon;
        }
        elseif ($icon == 3)
        {
            $the_icon['icon'] = 'fas fa-cloud';
            $the_icon['desc'] = 'Berawan';
            return $the_icon;
        }
        elseif ($icon == 4)
        {
            $the_icon['icon'] = 'fas fa-cloud';
            $the_icon['desc'] = 'Berawan Tebal';
            return $the_icon;
        }
        elseif ($icon == 5)
        {
            $the_icon['icon'] = 'fas fa-smog';
            $the_icon['desc'] = 'Udara Kabur';
            return $the_icon;
        }
        elseif ($icon == 10)
        {
            $the_icon['icon'] = 'fas fa-smog';
            $the_icon['desc'] = 'Asap';
            return $the_icon;
        }
        elseif ($icon == 45)
        {
            $the_icon['icon'] = 'fas fa-smog';
            $the_icon['desc'] = 'Kabut';
            return $the_icon;
        }
        elseif ($icon == 60)
        {
            $the_icon['icon'] = 'fas fa-umbrella';
            $the_icon['desc'] = 'Hujan Ringan';
            return $the_icon;
        }
        elseif ($icon == 61)
        {
            $the_icon['icon'] = 'fas fa-cloud-rain';
            $the_icon['desc'] = 'Hujan Sedang';
            return $the_icon;
        }
        elseif ($icon == 63)
        {
            $the_icon['icon'] = 'fas fa-cloud-rain';
            $the_icon['desc'] = 'Hujan Lebat';
            return $the_icon;
        }
        elseif ($icon == 80)
        {
            $the_icon['icon'] = 'fas fa-cloud-rain';
            $the_icon['desc'] = 'Hujan Lokal';
            return $the_icon;
        }
        elseif ($icon == 95)
        {
            $the_icon['icon'] = 'fas fa-bolt';
            $the_icon['desc'] = 'Hujan Petir';
            return $the_icon;
        }
        elseif ($icon == 97)
        {
            $the_icon['icon'] = 'fas fa-bolt';
            $the_icon['desc'] = 'Hujan Petir';
            return $the_icon;
        }
        else
        {
            $the_icon['icon'] = 'fas fa-cloud-sun';
            $the_icon['desc'] = 'Cerah Berawan';
        }
    }
    public function beritaAPI()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://berita.depok.go.id/api/v1/berita', ['verify' => false]);
	    $data = $response->getBody()->getContents();
        $berita = json_decode($data, true);
        $result = array();
        foreach ($berita as $key => $value) {
            $result[$key]['title'] = $value['title'];
            $result[$key]['isi'] = strip_tags($value['description']);
            $result[$key]['link'] = $value['link'];
            $result[$key]['image'] = $value['image'];
            $result[$key]['date'] = Carbon::parse($value['published_at'], 'Asia/Jakarta')->format('d M, Y');
        }
        return array('berita' => $result);
    }
    public function kunjunganAPI()
    {
        $month = Carbon::now()->format('F');
        $dataKunjungan = Cache::remember('data-kunjungan', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $md5 = md5('CMSDataWaReHoUse'.str_replace('-','',Carbon::now()->toDateString()));
            $response = $client->request('GET', 'https://cms.depok.go.id/Api/KesehatanKunjungan?Auth='. $md5 .'&kecamatan=&kelurahan=&tahun=2020&bulan=&Limit=&Offset=');
            $data = $response->getBody()->getContents();
            return json_decode($data, true);
        });
        $count = array();
        $count['puskesmas'] = 0;
        $count['rsud'] = 0;

        foreach ($dataKunjungan['data'] as $key => $value) {
            if ($value['JenisFaskes'] == 'puskesmas') {
                $count['puskesmas'] = $count['puskesmas'] + $value['jumlah'];
            } elseif ($value['JenisFaskes'] == 'Rumah Sakit') {
                $count['rsud'] = $count['rsud'] + $value['jumlah'];
            }
        }

        return $count;
    }
    public function hargaKomoditasAPI()
    {
        $dataKomoditas = Cache::remember('data-komoditas', $this->seconds, function(){
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://dsw.depok.go.id/api/komoditas/harga_depok', ['verify' => false]);
            $data = $response->getBody()->getContents();
            return $data;
        });
        $price = json_decode($dataKomoditas, true);
        
        foreach($price['data'] as $key => $data){
            $price['data'][$key]['src'] =  asset('img/komoditi/'. $data['komoditi'].'.jpg');
        }
        return $price['data'];
    }
    public function youtubeAPI()
    {
        return Cache::remember('youtube-api', 60 * 60 * 24, function () {
            return Youtube::listChannelVideos('UCco0gmWTlN9nsxnlAy-tWFA', 5, "date");
        });
    }
    public function infografisAPI()
    {
        $infografis = Infografis::take(4)->where('status', 1)->orderBy('created_at', 'desc')->get();
        foreach ($infografis as $key => $data) {
            $infografis[$key]['src'] = asset('storage/uploads/infografis/'.$data->imageName);
        }
        return response()->json($infografis);
    }
    public function beritaRSS()
    {
        $feed = FeedReader::read('http://feeds.feedburner.com/testdepokgoid');
        $result = array();
        foreach ($feed->get_items(0, 6) as $key => $item) {
            $result[$key]['title'] = $item->get_title();
            $result[$key]['date'] = $item->get_date();
            $result[$key]['link'] = $item->get_permalink();
            preg_match( '@src="([^"]+)"@' , $item->get_description(), $match );
            $src = array_pop($match);
            $result[$key]['image'] = $src;
        }
        return array('berita' => $result);
    }
    public function getKelurahan($kecamatanId)
    {
        $kelurahan = Kelurahan::where('kd_kecamatan', $kecamatanId)->get();
        return $kelurahan;
    }
}
