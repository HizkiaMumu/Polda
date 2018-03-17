<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisKejahatan;
use App\SubJenisKejahatan;

class JenisKejahatanController extends Controller
{

    public function getJenisKejahatan(){
      $data = JenisKejahatan::all();
      return $data;
    }

    public function getDetailJenisKejahatan($id){
      $data = JenisKejahatan::find($id);
      $data->subJenis;
      return $data;
    }

    public function postJenisKejahatan(Request $request){
      $data = $request->all();
      if ($request->hasFile('icon_jenis_kejahatan')) {
        $path = $request->file('icon_jenis_kejahatan')->store('jenis_kejahatan_icons');
        $data['icon_jenis_kejahatan'] = $path;
      }
      $kirim = JenisKejahatan::create($data);
      return redirect()->back()->with('OK', 'Berhasil menambahkan Jenis Kejahatan!');
    }

    public function deleteJenisKejahatan($id){
      $data = JenisKejahatan::findOrFail($id);
      $data->delete();
      return redirect()->back()->with('OK', 'Berhasil menghapus data!');
    }

}
