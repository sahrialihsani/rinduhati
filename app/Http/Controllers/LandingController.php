<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('index');
    }
    public function paket(){
        return view('menus.paket.paket');
    }
    public function kontak(){
        return view('menus.kontak');
    }
    public function blog(){
        return view('menus.blog.blog');
    }
    public function detail_blog(){
        return view('menus.blog.detail_blog');
    }
    public function spot(){
        return view('menus.pariwisata.spot');
    }
    public function detail_wisata(){
        return view('menus.pariwisata.detail_wisata');
    }
    public function kategori(){
        return view('menus.pariwisata.kategori');
    }
    public function tentang_desa(){
        return view('menus.tentang.index');
    }
}
