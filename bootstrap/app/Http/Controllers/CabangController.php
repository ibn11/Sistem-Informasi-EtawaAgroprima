<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;
use Session;

class CabangController extends Controller
{
    public function index(){

        //get posts
        $cabang = Cabang::latest()->paginate();

        //render view with posts
        return view('backend/pages.datacabang',compact('cabang'));
}

public function detailcabang($id){
    $cabang = Cabang::find($id);

    return view ('backend/pages.detailcabang', compact('cabang'));
}

    public function tambahcabang (){


        //render view with posts
        return view('backend/pages.tambahcabang');
}

public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_cabang'=> 'required',
            'desk'=> 'required'
          
        ]);

        //create post
        Cabang::create([
            'nama_cabang'=> $request->nama_cabang,
            'desk'=> $request->desk
        ]);
        Session::flash('status','Data Berhasil Ditambahkan');

        
        // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        return redirect('/cabang');
    }
    public function  editcabang  (Request $request, $id){
        $cabang = Cabang::findOrFail($id);

        // dd ($produk);
        return view ('backend/pages.editcabang', ['cabang' => $cabang]);
    }

    public function update(Request $request, $id)
    {
        $cabang = Cabang::find($id );

        //validate form
        $this->validate($request, [
            'nama_cabang'     => 'required',
            'desk'     => 'required'
       
        ]);


            //update post without image
            $cabang->update([
                'nama_cabang'     => $request->nama_cabang,
                'desk'     => $request->desk,
            ]);

        $cabang-> save();
        Session::flash('status','Data Berhasil Diubah');

        //redirect to index
        // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
        return redirect('/cabang');
    }
    public function destroy (Cabang $cabang){
        $cabang->delete();
        Session::flash('status','Data Berhasil Dihapus');
        return redirect()->route('cabang.index');

    }

}