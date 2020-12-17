<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_user', 'id');
    }

    public function pesanan()
    {
        return $this->hasMany('App\Pesanan', 'id');
    }
}
