<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

use Session;

class KategoriController extends Controller
{
    
    public function index (){

        //get posts
        $kategori = kategori::latest()->paginate();

        //render view with posts
        return view('backend/pages.kategoriproduk', compact('kategori'));
       // $produk sama saja menjalankan model Produk, :: all adalah sintak php SELECT*FROM Tabel Produks
      
       // menampilkan view didlam folder backend/page dan file dataproduk
       // 'data  ['data' => $produk] berfungsi untuk memanggil $produk
       
   }
   

public function store(Request $request)
{
    //validate form
    $this->validate($request, [
        'nama_kategori'     => 'required'
    ]);


    //create post
    Kategori::create([
        'nama_kategori'     => $request->nama_kategori
    ]);

    Session::flash('status','Kategori Berhasil Ditambahkan');

    //redirect to index
    // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    return redirect('/kategori');
}

public function  editkategori  (Request $request, $id){
    $kategori = Kategori::findOrFail($id);
   

    // dd ($produk);
    return view ('backend/pages.editkategori', ['kategori' => $kategori]);
}

public function update(Request $request, $id)
{
    $kategori = Kategori::find($id);

    //validate form
    $this->validate($request, [
        'nama_kategori'     => 'required'
       
   
    ]);


        //update post without image
        $kategori->update([
            'nama_kategori'     => $request->nama_kategori
            
        ]);

    $kategori->save();
    

    //redirect to index
    // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    return redirect('/kategori');
}

public function destroy (Kategori $kategori){
    $kategori->delete();
    Session::flash('status','Kategori Berhasil Dihapus');
    return redirect()->route('kategori.index');

}



}
