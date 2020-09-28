<?php

namespace App\Http\Controllers;

use Exception;
use FeedReader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Alaouy\Youtube\Facades\Youtube;
use GuzzleHttp\Exception\RequestException;
use App\Agenda;
use App\Sejarah;
use App\Service;
use App\Slider;
use App\Category;
use App\Infografis;
use App\Ikon;
use App\Content;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggal = Carbon::now()->format('d F Y');
        $infografis = Infografis::where('status', 1)->orderBy('created_at', 'desc')->take(2)->get();
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::with('services')->orderBy('pos', 'asc')->take(12)->get();
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        $popup = Slider::where('popup', 1)->latest()->first();

        return view('beranda-new', compact('agendas', 'categories', 'sliders', 'infografis','tanggal', 'popup'));
    }
    public function betaIndex()
    {
        $tanggalHijriyah  = \GeniusTS\HijriDate\Date::now()->format('d F Y');
        $tanggal = Carbon::now()->format('d F Y');
        $infografis = Infografis::where('status', 1)->get();
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::with('services')->orderBy('pos', 'asc')->take(8)->get();
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        $agendasToday = Agenda::where('tanggal', Carbon::today())->orderBy('tanggal', 'asc')->take(3)->get();
        $agendasNext = Agenda::where('tanggal', '!=', Carbon::today())->orderBy('tanggal', 'asc')->take(2)->get();
        $popup = Slider::where('popup', 1)->first();

        return view('beranda-v1', compact('agendasToday','agendasNext' ,'categories', 'sliders', 'infografis','tanggal', 'tanggalHijriyah', 'popup'));
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
        $agendas = Agenda::orderBy('created_at', 'desc')->get();
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
    public function sejarah()
    {
        $sejarah = Sejarah::find(1);
        return view('sejarah')->with('sejarah', $sejarah);
    }
    public function lambangIdentitas()
    {
        return view('lambang');
    }
    public function ikonKota()
    {
        //$ikon = Ikon::find(1);
        return view('ikon');
    }
    public function seniBudaya()
    {
        return view('seni-budaya');
    }
    public function sosialEkonomi()
    {
        return view('sosial-ekonomi');
    }
    public function demografi()
    {
        return view('demografi');
    }
    public function geografi()
    {
        return view('geografi');
    }
    public function dinas()
    {
        return view('dinas');
    }
    public function kecamatan()
    {
        return view('kecamatan');
    }
    public function sekda()
    {
        return view('sekda');
    }
    public function kelurahan()
    {
        return view('kelurahan');
    }
    public function layanan()
    {
        $categories = Category::with('services')->orderBy('pos', 'asc')->get();
        return view('layanan', compact('categories'));
    }
    public function visiMisi()
    {
        return view('visi-misi');
    }
    public function pimpinanDaerah()
    {
        return view('pimpinan-daerah');
    }
    public function strukturDaerah()
    {
        return view('struktur-daerah');
    }
    public function perundangundangan()
    {
        return view ('perundangundangan');
    }
    public function penghargaan()
    {
        return view('penghargaan');
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
    public function berita()
    {
        return view('berita');
    }
    public function listPengumuman()
    {
        $pengumuman = Slider::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('list-pengumuman', compact('pengumuman'));
    }
    public function pengumuman($url)
    {
        $pengumuman = Slider::where('url', '=', $url)->firstOrFail();
        return view('pengumuman', compact('pengumuman'));
    }
    public function kependudukanAPI()
    {
        $client = new \GuzzleHttp\Client();
        $md5 = md5('CMSDataWaReHoUseK3PeNduDukaN'.str_replace('-','',Carbon::now()->toDateString()));
        $response = $client->request('GET', 'https://cms.depok.go.id/Api/Penduduk?Auth='. $md5 .'&kecamatan=&kelurahan=&dimensi=agama&subdimensi=&Limit=&Offset=');
        $data = $response->getBody()->getContents();
        $population = json_decode($data, true);
        
        return $population['Jumlah_Penduduk'];
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
        return response()->json($this->getTableHTML('http://pbb-bphtb.depok.go.id:8081/Mbphtb/Reports/MonBPHTB.aspx', 2, 3));
    }
    public function pbbAPI()
    {
        return response()->json($this->getTableHTML('http://pbb-bphtb.depok.go.id:8081/DPBB/V_DASHBOARD/PrintV_DASHBOARDTable.aspx', 1, 10));
    }
    public function kesehatanAPI()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://dsw.depok.go.id/html/penyakitdata', ['verify' => false]);
        $data = $response->getBody()->getContents();
        $diseases = json_decode($data, true);

        return $diseases;
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
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-JawaBarat.xml');
        $xml = simplexml_load_string($response->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);

        $forecast['suhu'] = $xml->forecast->area[11]->parameter[5]->timerange[2]->value[0];
        $forecast['cuaca'] = $xml->forecast->area[11]->parameter[6]->timerange->value[0];
        $forecast['kelembapan'] = $xml->forecast->area[11]->parameter[0]->timerange->value[0];
        $forecast['angin'] = $xml->forecast->area[11]->parameter[8]->timerange->value[1];

        return $forecast;
    }
    public function beritaAPI()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://berita.depok.go.id/api/v1/berita', ['verify' => false]);
	    $data = $response->getBody()->getContents();
        $berita = json_decode($data, true);
        $result = array();
        foreach ($berita as $key => $value) {
            $result[$key]['title'] = $berita[$key]['title'];
            $result[$key]['isi'] = strip_tags($value['body']);
            $result[$key]['link'] = 'https://berita.depok.go.id/' . $value['type'] . '/' . $value['slug'] . '-' . $value['id'];
            $result[$key]['image'] = 'https://berita.depok.go.id/upload/media/posts/' . $value['thumb'] . '-s.jpg';
            $result[$key]['date'] = Carbon::parse($value['published_at'], 'Asia/Jakarta')->format('d M, Y');
        }
        return array('berita' => $result);
    }
    public function kunjunganAPI()
    {
        $client = new \GuzzleHttp\Client();
        $md5 = md5('CMSDataWaReHoUse'.str_replace('-','',Carbon::now()->toDateString()));
        $response = $client->request('GET', 'https://cms.depok.go.id/Api/KesehatanKunjungan?Auth='. $md5 .'&kecamatan=&kelurahan=&tahun=2020&bulan=&Limit=&Offset=');
        $data = $response->getBody()->getContents();
        $visit = json_decode($data, true);
        $count = array();
        $count['puskesmas'] = 0;
        $count['rsud'] = 0;

        foreach ($visit['data'] as $key => $value) {
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
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://dsw.depok.go.id/api/komoditas/harga_depok', ['verify' => false]);
        $data = $response->getBody()->getContents();
        $price = json_decode($data, true);

        return $price['data'];
    }
    public function youtubeAPI()
    {
        try {
            $youtube = Youtube::listChannelVideos('UCco0gmWTlN9nsxnlAy-tWFA', 5, "date");

            Storage::put('youtube.json', json_encode($youtube));

            return response()->json($youtube);

        } catch (Exception $e) {
            if (Str::startsWith($e->getMessage(), 'Error 403')) {
                // Get Cache or return custom response
                if (Storage::exists('youtube.json')) {
                    return response(Storage::get('youtube.json'))->header('Content-Type', 'application/json');
                }

                return ['errors' => 'API Limit Reached'];
            }

            throw $e;

        }
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
    //=========================================================================//
    //GET API CUACA DRAKSKY UNTUK DIKIRIM KE INDEX
    public function cuaca()
    {
        $coordinates = '-6.3944475, 106.8213664';
        $api_url = 'https://api.darksky.net/forecast/760b82e261c5be16214234e316b05fd8/' . $coordinates;

        try {
            $forecast = json_decode(file_get_contents($api_url));
            Storage::put('cuaca.json', json_encode($forecast));
        } catch (exception $e) {
            if(Str::contains($e->getMessage(), ['403', 'Forbidden'])){
                // Get Cache or return custom response
                if (!Storage::exists('cuaca.json')) {
                    return ['errors' => 'API Limit Reached'];
                }
                $forecast = json_decode(Storage::get('cuaca.json'));
            }
        }
        if ($forecast) {
            $temperature_current                = round($forecast->currently->temperature);
            $icon['hari_ini']                   = $this->get_icon($forecast->currently->icon);
            $icon['besok']                      = $this->get_icon($forecast->daily->data[1]->icon);
            $icon['lusa']                       = $this->get_icon($forecast->daily->data[2]->icon);
            $result['temperature_current']      = $this->celcius($temperature_current);
            $result['temperature_besok_rendah'] = $this->celcius($forecast->daily->data[1]->temperatureLow);
            $result['temperature_besok_tinggi'] = $this->celcius($forecast->daily->data[1]->temperatureHigh);
            $result['temperature_lusa_tinggi']  = $this->celcius($forecast->daily->data[2]->temperatureHigh);
            $result['temperature_lusa_rendah']  = $this->celcius($forecast->daily->data[2]->temperatureLow);
            $result['icon'] = $icon;
        }

        return $result;
    }
    //MENGHITUNG SUHU DALAM CELCIUS
    public function celcius($temperature_current)
    {
        return round(($temperature_current - 32) * .5556);
    }
    //SETTING ICON CUACA SESUAI DENGAN DATA DARI API
    public function get_icon($icon)
    {
        if ($icon === 'clear-day')
        {
            $the_icon = 'fas fa-cloud-sun';
            return $the_icon;
        }
        elseif ($icon === 'clear-night')
        {
            $the_icon = 'fas fa-moon';
            return $the_icon;
        }
        elseif ($icon === 'rain')
        {
            $the_icon = 'fas fa-cloud-rain';
            return $the_icon;
        }
        elseif ($icon === 'snow')
        {
            $the_icon = 'fas fa-snowflake';
            return $the_icon;
        }
        elseif ($icon === 'sleet')
        {
            $the_icon = 'fas fa-snowflake';
            return $the_icon;
        }
        elseif ($icon === 'wind')
        {
            $the_icon = 'fas fa-wind';
            return $the_icon;
        }
        elseif ($icon === 'fog')
        {
            $the_icon = 'fas fa-cloud';
            return $the_icon;
        }
        elseif ($icon === 'cloudy')
        {
            $the_icon = 'fas fa-cloud';
            return $the_icon;
        }
        elseif ($icon === 'partly-cloudy-day')
        {
            $the_icon = 'fas fa-cloud-sun';
            return $the_icon;
        }
        elseif ($icon === 'partly-cloudy-night')
        {
            $the_icon = 'fas fa-cloud-moon';
            return $the_icon;
        }
        else
        {
            $the_icon = 'fas fa-cloud';
        }
    }
}