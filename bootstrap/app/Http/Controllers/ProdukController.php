<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;

class ProdukController extends Controller
{
    public function index (){

         //get posts
         $produk = Produk::latest()->paginate();

         //render view with posts
         return view('backend/pages.dataproduk', compact('produk'));
         
        // $produk sama saja menjalankan model Produk, :: all adalah sintak php SELECT*FROM Tabel Produks
       
        // menampilkan view didlam folder backend/page dan file dataproduk
        // 'data  ['data' => $produk] berfungsi untuk memanggil $produk
        
    }

    public function detailproduk($id){
        $produk = Produk::find($id);
        $kategori = Kategori::find($id);

        return view('backend/pages.detailproduk',compact('produk','kategori'));
    }

    public function tambahProduk(){

        $kategori = Kategori::all();

        // $produk = Produk::create($request->all());
        return view('backend/pages.tambahproduk', compact('kategori'));


    }
   
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id_kategori'     => 'required',
            'judul'     => 'required',
            'harga'   => 'required',
            'stok'   => 'required',
            'desk'   => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/posts', $gambar->hashName());

        //create post
        Produk::create([
            'id_kategori'     => $request->id_kategori,
            'judul'     => $request->judul,
            'harga'   => $request->harga,
            'stok'   => $request->stok,
            'desk'   => $request->desk,
            'gambar'     => $gambar->hashName()
        ]);
        Session::flash('status','Menu Berhasil Ditambahkan');

        //redirect to index
        // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        return redirect('/produk');
    }

    public function  editdata  (Request $request, $id){
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();

        // dd ($produk);
        return view ('backend/pages.edit', ['produk' => $produk, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        //validate form
        $this->validate($request, [
            'id_kategori'     => 'required',
            'judul'     => 'required',
            'harga'   => 'required',
            'stok'   => 'required',
            'desk'   => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/posts', $gambar->hashName());

            //delete old image
            Storage::delete('public/posts/'.$produk->gambar);

            //update post with new image
            $produk->update([
                'id_kategori'     => $request->id_kategori,
                'judul'     => $request->judul,
                'harga'   => $request->harga,
                'stok'   => $request->stok,
                'desk'   => $request->desk,
                'gambar'     => $gambar->hashName()
            ]);

        } else {

            //update post without image
            $produk->update([
                'id_kategori'     => $request->id_kategori,
                'judul'     => $request->judul,
                'harga'   => $request->harga,
                'stok'   => $request->stok,
                'desk'   => $request->desk
            ]);
        }

        $produk->save();
        Session::flash('status','Data Berhasil Diubah');

        //redirect to index
        // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
        return redirect('/produk');
    }
    public function destroy (Produk $produk){
        $produk->delete();
        Session::flash('status','Data Berhasil Dihapus');
        return redirect()->route('produk.index');
        

    }

}
