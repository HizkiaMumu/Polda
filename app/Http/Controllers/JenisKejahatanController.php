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

    public function getSubJenisKejahatan($jenis){
      $data = JenisKejahatan::where('nama_jenis_kejahatan', $jenis)->first();
      return $data->subJenis;
    }

}
