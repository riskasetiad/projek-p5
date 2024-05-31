<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = Artikel::all();
        return view('artikel.create', compact('artikel'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $artikel->sampul = $name;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));

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
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $artikel->sampul = $name;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Data berhasil dihapus!');

    }
}
