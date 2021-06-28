<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_user', 'id');
    }

    public function detail_pesanan()
    {
        return $this->hasMany('App\DetailPesanan','id_pesanan', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany('App\Pembayaran','id_pesanan');
    }
    
    public function layanan()
    {
        return $this->belongsTo('App\Layanan','id_layanan');
    }

    public function alldata()
    {
        return DB::table('pesanans')
            ->join('pelayanan', 'pelayanan.id_layanan', '=', 'pesanans.id_layanan')
            ->get();
    }
}
