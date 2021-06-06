<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Layanan;
use App\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::paginate(20);
        return view('menu', ['menu' => $menu]);
    }
    
    public function pesanindex()
    {
        $menu = Menu::paginate(20);                
        return view('pesanmenu', ['menu' => $menu]);
    }
    
    public function adminindex()
    {
        $menu = Menu::all();
        return view('admin.menu')->with('menu',$menu);
    }

    public function adminindexedit(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menuedit')->with('menu',$menu);
    }
    
    public function adminindexupdate(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->nama_menu = $request->input('username');
        $menu->deskripsi = $request->input('description');
        $menu->harga = $request->input('price');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $menu->gambar = $filename;
        }

        $menu->save();
        return redirect('/admin/daftarmenu')->with('menu',$menu);
    }
    
    public function adminindextambah()
    {
        return view('admin.menutambah');
    }    
    
    public function adminindexstore(Request $request)
    {
        $menu =  new Menu();

        $menu->nama_menu = $request->input('name');
        $menu->deskripsi = $request->input('description');
        $menu->harga = $request->input('price');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('img/', $filename);
            $menu->gambar = $filename;            
        } else {
            return $request;
            $menu->gambar = '';
        }
        $menu->save();
        return redirect('/admin/daftarmenu')->with('menu',$menu);
    }

    public function adminindexhapus($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin/daftarmenu')->with('menu',$menu);
    }
}
