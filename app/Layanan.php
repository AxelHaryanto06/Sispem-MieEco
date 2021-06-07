<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'pelayanan';

    public function pesanan()
    {
        return $this->hasMany('App\Pesanan','id_layanan');
    }
}