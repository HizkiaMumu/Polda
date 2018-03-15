<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JenisKejahatan;

class SubJenisKejahatan extends Model
{
    public function jenis(){
      return $this->belongsTo('App\JenisKejahatan');
    }
}
