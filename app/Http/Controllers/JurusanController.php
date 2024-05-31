<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
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
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.create', compact('jurusan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurusan = new Jurusan;
        $jurusan->kaprog = $request->kaprog;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/jurusan', $name);
            $jurusan->sampul = $name;
        }

        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->kaprog = $request->kaprog;
        $jurusan->sampul = $request->sampul;

        //upload img
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/jurusan', $name);
            $jurusan->sampul = $name;
        }

        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Data berhasil dihapus!');

    }
}
