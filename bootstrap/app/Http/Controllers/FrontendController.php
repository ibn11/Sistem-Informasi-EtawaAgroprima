<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Profil;
use App\Models\Kontak;
use App\Models\Kategori;
use App\Models\Cabang;

class FrontendController extends Controller
{
    public function index(){

        $profil = Profil::all();
        $produk = Produk::all();
        $kontak = Kontak::all();
        $kategori = Kategori::all();
  
      //render view with posts
        return view('frontend/pages.home', compact('profil','produk','kontak', 'kategori'));

    }

    public function menu(){
        $produk = Produk::all();
        $kategori = Kategori::all();

        //render view with posts
        return view('frontend/pages.menu', compact('produk','kategori'));
    }

    public function show_menu($id){
        $produk = Produk::find($id);
        $kontak = Kontak::find(1);
        return view('frontend/component.detailmenu', compact('produk','kontak'));

    }

    public function profil(){
        $profil = Profil::all();
      
          //render view with posts
            return view('frontend/pages.profil', compact('profil'));
        
        
    }

    public function kontak(){
        $kontak = Kontak::all();
    
        //render view with posts
          return view('frontend/pages.kontak',compact('kontak'));

    }

    public function cabang(){
      $cabang = Cabang::all();
  
      //render view with posts
        return view('frontend/component.cabang',compact('cabang'));

  }

    
}
