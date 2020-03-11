<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Alaouy\Youtube\Facades\Youtube;
use FeedReader;
use GuzzleHttp\Exception\RequestException;
use App\Agenda;
use App\Sejarah;
use App\Service;
use App\Slider;
use App\Category;
use App\Infografis;
use App\Ikon;

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
        $tanggalHijriyah  = \GeniusTS\HijriDate\Date::now()->format('d F Y');
        $tanggal = Carbon::now()->format('d F Y');
        $infografis = Infografis::where('status', 1)->get();
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::with('services')->orderBy('pos', 'asc')->take(12)->get();
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        $popup = Slider::where('popup', 1)->first();

        return view('beranda-new', compact('agendas', 'categories', 'sliders', 'infografis','tanggal', 'tanggalHijriyah', 'popup'));
    }
    public function agenda()
    {
        $agendas = Agenda::orderBy('created_at', 'desc')->get();
        return view('agenda', compact('agendas'));
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
        $infografis = Infografis::where('status', 1)->get();
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
        $pengumuman = Slider::all();
        return view('list-pengumuman', compact('pengumuman'));
    }
    public function pengumuman($url)
    {
        $pengumuman = Slider::where('url', '=', $url)->firstOrFail();
        return view('pengumuman', compact('pengumuman'));
    }
    public function cuacaAPI()
    {
        $cuaca = $this->cuaca();
        return $cuaca;
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
    public function youtubeAPI()
    {
        try {
            $youtube = Youtube::listChannelVideos('UCco0gmWTlN9nsxnlAy-tWFA', 5, "date");

            Storage::put('youtube.json', json_encode($youtube));

            return response()->json($youtube);

        } catch (Exception $e) {
            if (Str::startsWith($e->getMessage(), 'Error 403 Daily Limit Exceeded')) {
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
    public function cuaca() {
        $coordinates = '-6.3944475, 106.8213664';

        $api_url = 'https://api.darksky.net/forecast/81d686a66f2b78515e71aab6652e47ad/' . $coordinates;
        try {
            $forecast = json_decode(file_get_contents($api_url));
        } catch (Exception $e) {
            $result = [
                'temperature_current' => 0,
                'temperature_besok_rendah' => 0,
                'temperature_besok_tinggi' => 0,
                'temperature_lusa_tinggi' => 0,
                'temperature_lusa_rendah' => 0,
                'icon' => ['hari_ini' => '', 'besok' => '', 'lusa' => ''],
            ];
        }

        if ($forecast) {
            $temperature_current                = round($forecast->currently->temperature);
            $icon['hari_ini']                   = $forecast->currently->icon;
            $icon['besok']                      = $forecast->daily->data[1]->icon;
            $icon['lusa']                       = $forecast->daily->data[2]->icon;
            $result['temperature_current']      = $temperature_current;
            $result['temperature_besok_rendah'] = $forecast->daily->data[1]->temperatureLow;
            $result['temperature_besok_tinggi'] = $forecast->daily->data[1]->temperatureHigh;
            $result['temperature_lusa_tinggi']  = $forecast->daily->data[2]->temperatureHigh;
            $result['temperature_lusa_rendah']  = $forecast->daily->data[2]->temperatureLow;
            $result['icon'] = $icon;
        }

        return $result;
    }
    //MENGHITUNG SUHU DALAM CELCIUS
    public function celcius($temperature_current) {
        return round(($temperature_current - 32) * .5556);
    }
    //SETTING ICON CUACA SESUAI DENGAN DATA DARI API
    public function get_icon($icon) {
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
    //=========================================================================//
}

