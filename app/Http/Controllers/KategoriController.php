<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();

        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategoris'
        ]);

        $cat = new Kategori;

        $cat->nama = $request->nama;
        $cat->slug = str_slug($request->nama);
        $cat->save();

        toastr()->success('Data berhasil ditambah!', "$cat->name");

        return redirect()->route('kategori.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:kategoris'
        ]);

        $cat = Kategori::findOrFail($request->id);

        $cat->nama = $request->nama;
        $cat->slug = str_slug($request->nama);
        $cat->save();

        toastr()->warning('Data berhasil diubah!', "$cat->nama");

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cat = Kategori::findOrFail($request->id);
        $old = $cat->nama;
        $cat->delete();

        toastr()->error('Data berhasil dihapus!', "$old");

        return redirect()->route('kategori.index');
    }
}
