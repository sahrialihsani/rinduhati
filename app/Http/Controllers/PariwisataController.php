<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    public function index(){
        return view('admin/menu/pariwisata/index');
    }
}
