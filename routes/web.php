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

Route::view('/','index');
Route::view('paket','menus.paket.paket');
Route::view('kontak','menus.kontak');
Route::view('blog','menus.blog.blog');
Route::view('blog/detail_blog','menus.blog.detail_blog');
Route::view('spot/wisata','menus.pariwisata.spot');
Route::view('spot/kategori','menus.pariwisata.kategori');
Route::view('tentang_desa','menus.tentang.index');