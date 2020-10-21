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
//Pendaftaran PDAM
//Route::get('/pendaftaran-direksi-pdam/berhasil', 'PendaftaranController@success')->name('pendaftaran.success');
//Route::resource('/pendaftaran-direksi-pdam', 'PendaftaranController');

Route::prefix('beta')->group(function (){
    Route::get('beranda', 'BerandaController@betaIndex');
    Route::get('data', 'BerandaController@data');
    Route::get('demografi', 'BerandaController@betademografi');
});
// // PEMERINTAHAN
// Route::get('/visi-misi', 'BerandaController@visiMisi')->name('visiMisi');
// Route::get('/struktur-daerah', 'BerandaController@strukturDaerah')->name('strukturDaerah');
// Route::get('/perundang-undangan', 'BerandaController@perundangundangan')->name('perundangundangan');
// Route::get('/penghargaan', 'BerandaController@penghargaan')->name('penghargaan');
// // PERANGKAT DAERAH
// Route::get('/dinas', 'BerandaController@dinas')->name('dinas');
// Route::get('/sekda', 'BerandaController@sekda')->name('sekda');
// Route::get('/kecamatan', 'BerandaController@kecamatan')->name('kecamatan');
// Route::get('/kelurahan', 'BerandaController@kelurahan')->name('kelurahan');
// INFO PUBLIK
// TRANSPARANSI
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


Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/pendaftaran-pdam', 'HomeController@pendaftaranPDAM')->name('pendaftaran.pdam');
    Route::get('/pendaftaran-pdam/unduh-surat-lamaran-{fileName}', 'HomeController@downloadSuratLamaran')->name('pendaftaran.unduh.surat-lamaran');
    Route::get('/pendaftaran-pdam/unduh-persyaratan-{fileName}', 'HomeController@downloadPersyaratan')->name('pendaftaran.unduh.persyaratan');
    Route::middleware('check.user')->group(function(){
        Route::resource('/slider', 'SliderController');
        Route::resource('/admin-kategori-dsw', 'CategoryController');
        Route::resource('/admin-agenda', 'AgendaController');
        Route::resource('/admin-infografis', 'InfografisController', ['parameters' => ['admin-infografis' => 'infografis']]);
        Route::get('/admin-slider', 'AdministratorController@slider')->name('admin.slider');
        Route::post('/tambahAgenda', 'AdministratorController@tambahAgenda')->name('admin.tambahAgenda');
        Route::get('/admin-layanan-dsw', 'AdministratorController@layanan')->name('admin.layanan');
        Route::post('/tambah-layanan', 'AdministratorController@tambahLayanan')->name('admin.tambahLayanan');
        Route::post('/ubah-layanan/{id}', 'AdministratorController@ubahLayanan')->name('admin.ubahLayanan');
        Route::get('/user', 'AdministratorController@user')->name('admin.user');
        Route::get('/admin-ikon', 'AdministratorController@ikon')->name('admin.ikon');
        Route::post('/ubah-ikon', 'AdministratorController@ubahIkon')->name('admin.ubahIkon');\
        Route::get('/admin/content/{content}', 'AdministratorController@content')->name('admin.content');
        Route::post('/admin/content/update/{content}', 'AdministratorController@updateContent')->name('admin.update.content');
    });
});

Route::get('/{content}', 'BerandaController@content')->name('content');
