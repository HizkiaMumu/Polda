<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubJenisKejahatan;

class JenisKejahatan extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
    public function subJenis(){
      return $this->hasMany('App\SubJenisKejahatan', 'jenis_kejahatan_id', 'id');
    }
}
