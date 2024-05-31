<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
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
        $eskul = Eskul::all();
        return view('eskul.index', compact('eskul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eskul = Eskul::all();
        return view('eskul.create', compact('eskul'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eskul = new Eskul;
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->isi = $request->isi;
        $eskul->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul', $name);
            $eskul->sampul = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->isi = $request->isi;
        $eskul->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul', $name);
            $eskul->sampul = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();
        return redirect()->route('eskul.index')->with('success', 'Data berhasil dihapus!');

    }
}
