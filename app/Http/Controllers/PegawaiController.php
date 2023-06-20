<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        // dd($fakultas);
        return view('Pegawai.index')->with('pegawai', $pegawai);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pegawai.create')->with('kategori', $kategori);
        
        //
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate(['nama_'=>'required | unique:prodis', 'kategoris_id'=>'required']);

        $prodi= new Pegawai();
        $prodi->nama_prodi=$validasi['nama_prodi'];
        $prodi->kategori_id=$validasi['kategori_id'];

        $prodi->save();
        return redirect()->route('pegawai.index')->with('success','Data pegawai Telah Disimpan.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
