<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();

        return view('admin.tag.index', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag;

        $tag->name = $request->nama;
        $tag->slug = str_slug($request->nama);
        $tag->save();

        toastr()->success('Data berhasil ditambah!', "$tag->name");

        return redirect()->route('tag.index');
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
        $tag = Tag::findOrFail($request->id);

        $tag->name = $request->nama;
        $tag->slug = str_slug($request->nama);
        $tag->save();

        toastr()->warning('Data berhasil diubah!', "$tag->name");

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tag = Tag::findOrFail($request->id);
        $old = $tag->name;
        $tag->delete();

        toastr()->error('Data berhasil dihapus!', "$old");

        return redirect()->route('tag.index');
    }
}
