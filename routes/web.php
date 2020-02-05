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
Route::get('/agenda', 'BerandaController@agenda')->name('agenda');
Route::get('infografis', 'BerandaController@infografis')->name('infografis');

// SEKILAS DEPOK
Route::get('/sejarah', 'BerandaController@sejarah')->name('sejarah');
Route::get('/lambang-identitas', 'BerandaController@lambangIdentitas')->name('lambangIdentitas');
Route::get('/ikon-kota', 'BerandaController@ikonKota')->name('ikonKota');
Route::get('/seni-budaya', 'BerandaController@seniBudaya')->name('seniBudaya');
Route::get('/sosial-ekonomi', 'BerandaController@sosialEkonomi')->name('sosialEkonomi');
Route::get('/demografi', 'BerandaController@demografi')->name('demografi');
Route::get('/geografi', 'BerandaController@geografi')->name('geografi');
// PEMERINTAHAN
Route::get('/visi-misi', 'BerandaController@visiMisi')->name('visiMisi');
Route::get('/pimpinan-daerah', 'BerandaController@pimpinanDaerah')->name('pimpinanDaerah');
Route::get('/struktur-daerah', 'BerandaController@strukturDaerah')->name('strukturDaerah');
Route::get('/perundang-undangan', 'BerandaController@perundangundangan')->name('perundangundangan');
Route::get('/penghargaan', 'BerandaController@penghargaan')->name('penghargaan');
// PERANGKAT DAERAH
Route::get('/dinas', 'BerandaController@dinas')->name('dinas');
Route::get('/sekda', 'BerandaController@sekda')->name('sekda');
Route::get('/kecamatan', 'BerandaController@kecamatan')->name('kecamatan');
Route::get('/kelurahan', 'BerandaController@kelurahan')->name('kelurahan');
// INFO PUBLIK
// TRANSPARANSI
Route::get('/layanan', 'BerandaController@layanan')->name('layanan');

Route::get('/api/agenda', 'BerandaController@AgendaAPI')->name('api.agenda');
Route::get('/api/berita', 'BerandaController@beritaAPI');
Route::get('/api/cuaca', 'BerandaController@cuacaAPI');
Route::get('/api/youtube', 'BerandaController@youtubeAPI');
Route::get('/rss/berita', 'BerandaController@beritaRSS')->name('rss.berita');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin-agenda', 'AdministratorController@agenda')->name('admin.agenda');
Route::get('/admin-slider', 'AdministratorController@slider')->name('admin.slider');
Route::post('/tambahAgenda', 'AdministratorController@tambahAgenda')->name('admin.tambahAgenda');
Route::post('/tambahSlider', 'AdministratorController@tambahSlider')->name('admin.tambahSlider');
Route::get('/admin-layanan-dsw', 'AdministratorController@layanan')->name('admin.layanan');
Route::post('/tambah-layanan', 'AdministratorController@tambahLayanan')->name('admin.tambahLayanan');
Route::post('/ubah-layanan/{id}', 'AdministratorController@ubahLayanan')->name('admin.ubahLayanan');
Route::post('/ubah-slider/{id}', 'AdministratorController@ubahSlider')->name('admin.ubahSlider');
Route::delete('/hapus-slider/{id}', 'AdministratorController@hapusSlider')->name('admin.hapusSlider');
Route::get('/admin-sejarah', 'AdministratorController@sejarah')->name('admin.sejarah');
Route::post('/ubahSejarah', 'AdministratorController@ubahSejarah')->name('admin.ubahSejarah');
Route::get('/admin-header', 'AdministratorController@header')->name('admin.header');
Route::post('/ubahHeader', 'AdministratorController@ubahHeader')->name('admin.ubahHeader');
Route::get('/user', 'AdministratorController@user')->name('admin.user');
Route::get('/admin-ikon', 'AdministratorController@ikon')->name('admin.ikon');
Route::post('/ubah-ikon', 'AdministratorController@ubahIkon')->name('admin.ubahIkon');