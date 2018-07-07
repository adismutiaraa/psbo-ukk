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

Auth::routes();
Route::get('/', 'HomeController@index')->name('beranda.view');
//Route::get('/home', 'HomeController@index');//->name('home');

Route::prefix('admin')->group(function(){
 	//Route::get('/')
	Route::get('/laporan', 'AdminController@laporan-masuk')->name('admin.laporan.masuk');
	Route::get('/laporan', 'AdminController@laporan-konfirm')->name('admin.laporan.konfirm');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/laporan-masuk', 'AdminController@laporanMasuk')->name('laporan-masuk');
  Route::get('/daftar-user', 'AdminController@daftarUser')->name('daftar-user');
  Route::patch('/{id}/laporan-dikonfirmasi', 'AdminController@dikonfirmasi')->name('admin.konfirmasi');
  Route::get('/laporan-dikonfirmasi', 'AdminController@laporanKonfirm')->name('laporan-dikonfirmasi');
  Route::delete('/{id}/laporan-dikonfirmasi', 'AdminController@destroy')->name('post.destroy');
  Route::get('/pengumuman', 'AdminController@pengumuman')->name('pengumuman');
  Route::get('/pengumuman-dipost', 'AdminController@pengumumanPost')->name('pengumuman-dipost');
  Route::delete('/{id}/pengumuman-dipost', 'AdminController@hapusPengumuman')->name('hapus.pengumuman');//untuk hapus pengumuman
  // Route::get('/pengumuman', 'AdminController@pengumumanPost')->name('pengumumanPost');
  Route::post('/pengumuman', 'AdminController@buatPengumuman')->name('buatPengumuman.view');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');

 });

Route::prefix('user')->group(function(){
    // Route::get('/', 'UserController@view')->name('buat-laporan.view');
   Route::get('/kontak', 'UserController@kontak')->name('kontak.view');
   Route::get('/pelayanan', 'UserController@pelayanan')->name('pelayanan.view');
   Route::get('/tupoksi', 'UserController@tupoksi')->name('tupoksi.view');
   Route::get('/buatLaporan', 'UserController@view')->name('laporan.view');
   Route::post('/buatLaporan', 'UserController@buatLaporan')->name('buatLaporan.view');
   Route::get('/laporan-saya', 'UserController@laporanSaya')->name('laporan-saya.view');
   // Route::post('/buat-laporan', 'UserController@buatLaporan')->name('buatLaporan.view');
   Route::get('/profil', 'UserController@profil')->name('profil.view');
});

// Route::prefix('laporan')->group(function(){
// 	Route::get('/kontak', 'UserController@kontak')->name('kontak.view');
// });