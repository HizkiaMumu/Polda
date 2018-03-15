<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisKejahatan;
use App\SubJenisKejahatan;

class PagesController extends Controller
{

    public function resume(){
      return view('pages/resume');
    }

    public function jenisKejahatan(){
      $data['jenis_kejahatan'] = JenisKejahatan::all();
      return view('pages/jenis-kejahatan', $data);
    }

}
