<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    //
    protected $table ='modal';
    protected $fillable = ['validasi_id','budget','hargasaham','jumlahsaham','sisasaham','durasisaham','roi'];
}
