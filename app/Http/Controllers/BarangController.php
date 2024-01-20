<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageFactoryInterface;

class BarangController extends Controller
{
    //
    public function index()
    {
      return view('barang.index',[
        'barang'=> Barang::all()
      ]);
    }
    public function delete(Barang $barang)
    {
        $barang->delete();

        return redirect('/');
    }
    public function create()
    {
        return view("barang.create");
    }
    public function store(Request $request)
    {
        $foto_file = $request->file('gambar');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." .$foto_extensi;
        $foto_file->move(public_path('barang'), $foto_nama);
        $data = $request->only(['nama_barang','stok','kondisi']);
        $data['gambar'] = $foto_nama;
        Barang::create($data);
        return redirect('/');
    }
    public function edit(Barang $barang)
    {
        return view('barang.edit',['barang'=>$barang]);
    }
    public function update(Request $request,Barang $barang)
    {
        if ($request->hasFile('gambar')) {

            $foto_file = $request->file('gambar');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." .$foto_extensi;
            $foto_file->move(public_path('barang'), $foto_nama);//sudah ter upload ke direktori

            File::delete(public_path('gambar').'/'.$barang->gambar);
        }
        $data = $request->only(['nama_barang','stok','kondisi']);
        $data['gambar'] = $foto_nama;
        $barang->update($data);
        return redirect('/');
    }
}
