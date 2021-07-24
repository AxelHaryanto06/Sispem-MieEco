<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use App\DetailPesanan;
use App\Pembayaran;
use Carbon\Carbon;
use Auth;
use Alert;
use PDF;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanans = Pesanan::where('id_user', Auth::user()->id)->where('status', '!=',0)->with('pembayaran')->get();

        return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->with('layanan')->first();        
        $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();
        $pembayaran = Pembayaran::where('id_user', Auth::user()->id)->where('id_pesanan', $pesanan->id)->first();  

        return view('history.detail', compact('pesanan','detail_pesanans','pembayaran'));
    }

    public function detailbayar(Request $request, $id)
    {
        $pesanan = Pesanan::where('id', $id)->first();  
        $pembayaran = Pembayaran::where('id_user', Auth::user()->id)->where('id_pesanan', $pesanan->id)->first();          
        $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();                

        if ($request->hasfile('foto_bukti')) {
            $file = $request->file('foto_bukti');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('img/', $filename);
            $pembayaran->bukti_foto = $filename;        
        } else {
            return $request;
            $pembayaran->bukti_foto = '';
        }
        $pembayaran->save();

        return view('history.detail', compact('pesanan','detail_pesanans','pembayaran','cek_pembayaran'));
    }

    public function bukti_pesan($id)
    {
        $pesanan = Pesanan::where('id', $id)->with('layanan')->first();
        $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();        

        $pdf = PDF::loadview('history.buktipesanan_pdf',['buktipesanan'=>$detail_pesanans], compact('pesanan','detail_pesanans'));
        return $pdf->download('bukti-pesanan-pdf');
    }
}
