<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        // dd($fakultas);
        return view('kategori.index')->with('kategori', $kategori);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate(['nama_kategori'=>'required', 'deskripsi'=>'required']);
        $kategori= new Kategori();
        $kategori->nama_kategori=$validasi['nama_kategori'];
        $kategori->deskripsi=$validasi['deskripsi'];

        $kategori->save();
        return redirect()->route('kategori.index')->with('success','Data Kategori Telah Disimpan.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        $kategori=Kategori::orderBy('nama_kategori','ASC')->get();
        return view('kategori.edit')
        ->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validasi=$request->validate([
            'nama_kategori'=>'required',
            'deskripsi'=>'required',


        ]);

        Kategori::where('id', $kategori->id)->update($validasi);
        return redirect()
            ->route('kategori.index')
            ->with('succcess', 'Data Kategori'. $validasi['nama_kategori'].'berhasil disimpan');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return back();
        //
    }
}
