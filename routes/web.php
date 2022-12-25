<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\api\PendidikanController;
use App\Http\Controllers\api\PendudukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda')->middleware(Spatie\Csp\AddCspHeaders::class);
Route::get('/agenda-kota', [BerandaController::class, 'agenda'])->name('list.agenda-kota');
Route::get('/pengumuman', [BerandaController::class, 'listPengumuman'])->name('list.pengumuman');
Route::get('/pengumuman/{url}', [BerandaController::class, 'pengumuman'])->name('pengumuman');
Route::get('/infografis', [BerandaController::class, 'infografis'])->name('infografis');
Route::get('/download/{file}', [DownloadsController::class, 'download'])->name('download');
Route::get('/pimpinan-daerah', [BerandaController::class, 'pimpinanDaerah'])->name('pimpinan');
Route::get('/demografi', [PendudukController::class, 'index'])->name('demografi');
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');

Route::get('/get-kelurahan-list/{kecamatanId}', [BerandaController::class, 'getKelurahan']);
Route::get('/layanan', [BerandaController::class, 'layanan'])->name('layanan');

Route::get('/api/agenda', [BerandaController::class,'AgendaAPI'])->name('api.agenda');
Route::get('/api/harga-komoditas', [BerandaController::class,'hargaKomoditasAPI'])->name('api.harga-komoditas');
Route::get('/api/berita', [BerandaController::class,'beritaAPI'])->name('api.berita');
Route::get('/api/cuacaBMKG', [BerandaController::class,'cuacaBMKGAPI']);
Route::get('/api/cuaca', [BerandaController::class,'cuacaAPI']);
Route::get('/api/youtube', [BerandaController::class,'youtubeAPI']);
Route::get('/api/kesehatan', [BerandaController::class,'kesehatanAPI']);
Route::get('/api/kependudukan', [BerandaController::class,'kependudukanAPI']);
Route::get('/api/kunjungan', [BerandaController::class,'kunjunganAPI']);
Route::get('/api/bphtb', [BerandaController::class,'bphtbAPI']);
Route::get('/api/pbb', [BerandaController::class,'pbbAPI']);
Route::get('/rss/berita', [BerandaController::class,'beritaRSS'])->name('rss.berita');
Route::get('/api/infografis', [BerandaController::class,'infografisAPI'])->name('api.infografis');
Route::get('/api/pengumuman', [BerandaController::class,'pengumumanAPI'])->name('api.pengumuman');
Route::get('/api/pendidikan', [BerandaController::class,'pendidikanAPI'])->name('api.pendidikan');
Route::get('/api/covid', [BerandaController::class,'covidAPI'])->name('api.covid');
Route::get('/api/demografi/{type}', [PendudukController::class, 'demografi'])
    ->name('api.demografi')
    ->where('type', 'Agama|Jenis Kelamin|Kelompok Umur|Pekerjaan|Pendidikan|Status Kawin');
Route::get('/api/pendidikan/detail/{type}', [PendidikanController::class, 'pendidikan'])
    ->name('api.pendidikan.detail')
    ->where('type', 'Sekolah|SekolahAkreditasi|SekolahKepemilikan|Pekerjaan|Pendidikan|SekolahKebutuhanKhusus');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::post('/upload-image', [AdministratorController::class, 'uploadImage'])->name('upload.image');
    Route::group(['middleware' => ['permission:mengelola agenda']], function(){
        Route::resource('/agenda', AgendaController::class);
    });
    Route::group(['middleware' => ['permission:mengelola dsw']], function () {
        Route::resource('/service', ServiceController::class);
        Route::resource('/kategori-dsw', CategoryController::class);
    });
    Route::group(['middleware' => ['permission:mengelola pengumuman']], function () {
        Route::resource('/slider', SliderController::class);
    });
    Route::group(['middleware' => ['permission:mengelola infografis']], function () {
        Route::resource('/infografis', InfografisController::class, ['parameters' => ['infografis' => 'infografis']]);
    });
    Route::group(['middleware' => ['permission:mengelola konten']], function () {
        Route::resource('/pimpinan', PimpinanController::class)->only(['index', 'update']);
        Route::post('/pimpinan/walikota', [PimpinanController::class, 'updateWalikota'])->name('admin.walikota.update');
        Route::post('/pimpinan/wakil-walikota', [PimpinanController::class, 'updateWakilWalikota'])->name('admin.wakil-walikota.update');
        Route::get('/content/{content}', [AdministratorController::class, 'content'])->name('admin.content');
        Route::post('/content/update/{content}', [AdministratorController::class, 'updateContent'])->name('admin.update.content');
    });
    Route::group(['middleware' => ['role:administrator']], function () {
        Route::resource('/user', UserController::class);
        Route::post('/user/{id}/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');
        Route::get('/admin', [AdministratorController::class, 'create'])->name('admin.create');
        Route::post('/admin', [AdministratorController::class, 'store'])->name('admin.store');
    });
});

Route::get('/{content}', [BerandaController::class, 'content'])->name('content');
