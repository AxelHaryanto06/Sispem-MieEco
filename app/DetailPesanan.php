<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    public function menu()
    {
        return $this->belongsTo('App\Menu','id_menu', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan','id_pesanan', 'id');
    }
}
