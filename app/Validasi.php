<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    //
    protected $table = 'validasi';
    protected $fillable = ['legalitas', 'prospek', 'budget', 'pengajuanusaha_id'];

     public function pengajuanusaha()
    {
     return $this->belongsTo('App\Pengajuanusaha');
    }
}
