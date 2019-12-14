<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $table = 'transaksi';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }
}
