<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use App\DetailPesanan;
use Carbon\Carbon;
use Auth;
use Alert;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanans = Pesanan::where('id_user', Auth::user()->id)->where('status', '!=',0)->get();

        return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();        
        $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();        

        return view('history.detail', compact('pesanan','detail_pesanans'));
    }
}
