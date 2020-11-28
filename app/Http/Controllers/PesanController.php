<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use App\DetailPesanan;
use Carbon\Carbon;
use Auth;
use Alert;

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
        
        alert()->success('Sukses','Pesanan Berhasil Masuk Keranjang');
        return redirect('user/menu');
    }
    
    public function cart()
    {
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
        if (!empty($pesanan)) {            
            $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();
        }

        return view('pesan.cart', compact('pesanan', 'detail_pesanans'));
    }

    public function hapus($id)
    {
        $detail_pesanan = DetailPesanan::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $detail_pesanan->id_pesanan)->first();
        $pesanan->total = $pesanan->total-$detail_pesanan->jml_harga;
        $pesanan->update();

        $detail_pesanan->delete();

        alert()->error('Hapus','Pesanan Berhasil Dihapus');
        return redirect('cart');
    }

    public function checkout()
    {
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        alert()->success('Sukses','Checkout Berhasil');
        return redirect('cart');
    }
}
