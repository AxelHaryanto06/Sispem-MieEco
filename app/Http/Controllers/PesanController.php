<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use App\DetailPesanan;
use Carbon\Carbon;
use Auth;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $menu = Menu::where('id', $id)->first();

        return view('pesan.index', compact('menu'));
    }

    public function pesan(Request $request, $id)
    {
        $menu = Menu::where('id', $id)->first();
        $tanggal = Carbon::now();

        // Validasi pesanan
        $cek_pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();

        // simpan ke database pesan
        if (empty($cek_pesanan)) { //cek pesanan sudah pernah buat atau belum
            $pesanan =  new Pesanan;
            $pesanan->id_user = Auth::user()->id;
            $pesanan->tanggal = $tanggal;        
            $pesanan->status = 0;
            $pesanan->total = 0;
            $pesanan->save();
        }        

        // simpan ke database detail pesan
        $pesanan_baru = Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();

        $detail_pesanan = new DetailPesanan;
        $detail_pesanan->id_menu = $menu->id;
        $detail_pesanan->id_pesanan = $pesanan_baru->id;
        $detail_pesanan->jumlah = $request->jumlah_pesan;
        $detail_pesanan->catatan = $request->input('catatan');
        $detail_pesanan->jml_harga = $menu->harga*$request->jumlah_pesan;
        $detail_pesanan->save();
        
        
        //jumlah total
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
        $pesanan->total = $pesanan->total+$menu->harga*$request->jumlah_pesan;
        $pesanan->update(); 

        return redirect('user/menu');
    }    
}
