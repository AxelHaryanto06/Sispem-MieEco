<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    
    public function detail_pesanan()
    {
        return $this->hasMany('App\DetailPesanan','id_menu', 'id');
    }
}
