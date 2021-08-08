<?php

use Illuminate\Support\Facades\Route;

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
//Landingpage
Route::get('/','LandingController@index');
Route::get('paket','LandingController@paket');
Route::get('kontak','LandingController@kontak');
Route::get('blog','LandingController@blog');
Route::get('blog/detail_blog','LandingController@detail_blog');
Route::get('spot/wisata','LandingController@spot');
Route::get('spot/wisata/detailwisata','LandingController@detail_wisata');
Route::get('spot/kategori','LandingController@kategori');
Route::get('tentang_desa','LandingController@tentang_desa');
// Route::view('login_admin','login');
//Login
Route::get('admin/login', 'AuthController@login');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('admin/dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
Route::get('admin/profil', 'ProfilController@index'); 
Route::get('admin/pariwisata', 'PariwisataController@index'); 
Route::get('admin/paket', 'PaketController@index');
Route::get('admin/blog', 'BlogController@index'); 


