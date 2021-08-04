<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
use App\Pesanan;
use App\Layanan;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard Admin";
        $total_menu = Menu::count();
        $total_pengguna = User::where('role', 'user')->count();
        $total_pesanan = Pesanan::where('status', 1)->count();
        $total_layanan = Layanan::count();
        return view('admin.dashboard',compact('title', 'total_menu', 'total_pengguna', 'total_pesanan', 'total_layanan'));
    }
}