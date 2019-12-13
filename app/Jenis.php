<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $table = 'jenis';
    protected $fillable = ['nama'];


    public function pengajuanusaha()
    {
        return $this->hasMany('App\Pengajuanusaha');
            
    }
}
