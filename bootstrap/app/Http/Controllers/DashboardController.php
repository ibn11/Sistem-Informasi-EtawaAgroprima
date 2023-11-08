<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Cabang;
use App\Models\Kategori;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $produk = Produk::all();
        $cabang = Cabang::all();
        $kategori = Kategori::all();
        return view ('backend/pages.home', compact('produk','cabang', 'kategori'));
    }
}
