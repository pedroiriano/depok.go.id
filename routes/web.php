<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'BerandaController@index')->name('beranda');
Route::get('/agenda-kota', 'BerandaController@agenda')->name('list.agenda-kota');
Route::get('/pengumuman', 'BerandaController@listPengumuman')->name('list.pengumuman');
Route::get('/pengumuman/{url}', 'BerandaController@pengumuman')->name('pengumuman');
Route::get('/infografis', 'BerandaController@infografis')->name('infografis');
Route::get('/download/{file}', 'DownloadsController@download')->name('download');
Route::get('/pimpinan-daerah', 'BerandaController@pimpinanDaerah')->name('pimpinan');
Route::get('/demografi', 'api\PendudukController@index')->name('demografi');
Route::get('/pendidikan', 'api\PendidikanController@index')->name('pendidikan');

Route::get('/get-kelurahan-list/{kecamatanId}', 'BerandaController@getKelurahan');
Route::get('/layanan', 'BerandaController@layanan')->name('layanan');

Route::get('/api/agenda', 'BerandaController@AgendaAPI')->name('api.agenda');
Route::get('/api/harga-komoditas', 'BerandaController@hargaKomoditasAPI')->name('api.harga-komoditas');
Route::get('/api/berita', 'BerandaController@beritaAPI');
Route::get('/api/cuacaBMKG', 'BerandaController@cuacaBMKGAPI');
Route::get('/api/cuaca', 'BerandaController@cuacaAPI');
Route::get('/api/youtube', 'BerandaController@youtubeAPI');
Route::get('/api/kesehatan', 'BerandaController@kesehatanAPI');
Route::get('/api/kependudukan', 'BerandaController@kependudukanAPI');
Route::get('/api/kunjungan', 'BerandaController@kunjunganAPI');
Route::get('/api/bphtb', 'BerandaController@bphtbAPI');
Route::get('/api/pbb', 'BerandaController@pbbAPI');
Route::get('/rss/berita', 'BerandaController@beritaRSS')->name('rss.berita');
Route::get('/api/infografis', 'BerandaController@infografisAPI')->name('api.infografis');
Route::get('/api/pengumuman', 'BerandaController@pengumumanAPI')->name('api.pengumuman');
Route::get('/api/pendidikan', 'BerandaController@pendidikanAPI')->name('api.pendidikan');
Route::get('/api/covid', 'BerandaController@covidAPI')->name('api.covid');
Route::get('/api/demografi/{type}', 'api\PendudukController@demografi')
    ->name('api.demografi')
    ->where('type', 'Agama|Jenis Kelamin|Kelompok Umur|Pekerjaan|Pendidikan|Status Kawin');
Route::get('/api/pendidikan/{type}', 'api\PendidikanController@pendidikan')
    ->name('api.pendidikan')
    ->where('type', 'Sekolah|SekolahAkreditasi|SekolahKepemilikan|Pekerjaan|Pendidikan|SekolahKebutuhanKhusus');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => ['permission:mengelola agenda']], function(){
        Route::resource('/admin-agenda', 'AgendaController');
    });
    Route::group(['middleware' => ['permission:mengelola dsw']], function () {
        Route::resource('/admin-service', 'ServiceController');
        Route::resource('/admin-kategori-dsw', 'CategoryController');
    });
    Route::group(['middleware' => ['permission:mengelola pengumuman']], function () {
        Route::resource('/slider', 'SliderController');
    });
    Route::group(['middleware' => ['permission:mengelola infografis']], function () {
        Route::resource('/admin-infografis', 'InfografisController', ['parameters' => ['admin-infografis' => 'infografis']]);
    });
    Route::group(['middleware' => ['permission:mengelola konten']], function () {
        Route::get('/admin/content/{content}', 'AdministratorController@content')->name('admin.content');
        Route::post('/admin/content/update/{content}', 'AdministratorController@updateContent')->name('admin.update.content');
    });
    Route::group(['middleware' => ['role:administrator']], function () {
        Route::resource('/user', 'UserController');
        Route::post('/user/{id}/update-password', 'UserController@updatePassword')->name('user.update-password');
        Route::get('/admin', 'AdministratorController@create')->name('admin.create');
        Route::post('/admin', 'AdministratorController@store')->name('admin.store');
    });
});

Route::get('/{content}', 'BerandaController@content')->name('content');
