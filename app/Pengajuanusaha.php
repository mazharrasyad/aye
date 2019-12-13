<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanusaha extends Model
{
    //
    protected $table = 'pengajuanusaha';
    protected $fillable = ['nama','jenis_id','deskripsi','alamat','foto','budget','durasi','user_id'];

    public function user()
    {
     return $this->belongsTo('App\User');
    }

     public function jenis()
    {
     return $this->belongsTo('App\Jenis');
    }

    public function pengajuanusaha()
    {
        return $this->hasMany('App\Validasi');
            
    }

}
