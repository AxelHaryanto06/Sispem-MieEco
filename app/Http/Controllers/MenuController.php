<?php

namespace App\Http\Controllers;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::paginate(20);
        return view('menu', ['menu' => $menu]);
    }
}
