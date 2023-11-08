<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Session;
class KontakController extends Controller
{
    public function index (){

      $kontak = Kontak::all();
  
      //render view with posts
        return view('backend/pages.datakontak',compact('kontak'));
      }

      public function update(Request $request,$id)
      {
          //validate form
          $this->validate($request, [
              'facebook'     => 'required',
              'instagram'     => 'required',
              'whatsapp'   => 'required',
              'desk'   => 'required',
              'maps' => 'required'
              
          ]);
          $kontak = Kontak::find($id);
  
          $kontak->update([
            'facebook'     => $request->facebook,
            'instagram'     => $request->instagram,
            'whatsapp'   => $request->whatsapp,
            'desk'   => $request->desk,
            'maps' => $request->maps
           ]);

           Session::flash('status','Data Kontak Berhasil Diubah');
  
          // redirect to index
          return redirect()->route('datakontak')->with(['success' => 'Data Berhasil Diubah!']);
          // return redirect('/dataprofil');
      }
  
}
