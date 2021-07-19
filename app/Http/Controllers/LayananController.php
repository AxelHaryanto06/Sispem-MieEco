<?php

namespace App\Http\Controllers;
use App\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewlayanan()
    {
        $layanan  = Layanan::all();
        return view('admin.layanan', compact('layanan'));
    }

    public function tambahlayanan()
    {        
        return view('admin.layanantambah');
    }

    public function tambahlayananstore(Request $request)
    {
        $layanan =  new Layanan();

        $layanan->jenis = $request->input('jenis');        
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('img/', $filename);
            $layanan->icon = $filename;            
        } else {
            return $request;
            $layanan->icon = '';
        }
        $layanan->save();

        return redirect('/admin/layanan')->with('layanan',$layanan);
    }

    public function editlayanan($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layananedit', compact('layanan'));
    }

    public function updatelayanan(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->jenis = $request->input('jenis');        

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $layanan->icon = $filename;
        }

        $layanan->save();
        return redirect('/admin/layanan')->with('layanan',$layanan);
    }

    public function deletelayanan($id)
    {
        $layanan = Layanan::find($id);
        $imagefile = $layanan->icon;
        if (file_exists('img/'.$imagefile)) {
            unlink('img/'.$imagefile);
        }
        $layanan->delete();
        return redirect('/admin/layanan')->with('layanan',$layanan);
    }
}
