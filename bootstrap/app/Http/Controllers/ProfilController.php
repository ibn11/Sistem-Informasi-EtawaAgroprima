<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Session;
class ProfilController extends Controller
{
    public function index (){

      $profil = Profil::all();

    //render view with posts
      return view('backend/pages.dataprofil', compact('profil'));
    }

    
    public function update(Request $request,$id)
    {
        //validate form
        $this->validate($request, [
            'facebook'     => 'required',
            'instagram'     => 'required',
            'whatsapp'   => 'required',
            'desk'   => 'required',
            
        ]);
        $profil = Profil::find($id);

        $profil->update([
          'facebook'     => $request->facebook,
          'instagram'     => $request->instagram,
          'whatsapp'   => $request->whatsapp,
          'desk'   => $request->desk,
         ]);

         Session::flash('status','Data Profil Berhasil Diubah');

        // redirect to index
        return redirect()->route('dataprofil')->with(['success' => 'Data Berhasil Diubah!']);
        // return redirect('/dataprofil');
    }

}
