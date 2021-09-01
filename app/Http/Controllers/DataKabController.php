<?php

namespace App\Http\Controllers;

use App\Models\DataKab;
use App\Models\DataKec;
use App\Models\DataDesa;
use Illuminate\Http\Request;

class DataKabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kab = DataKab::all(); /* SELECT * FROM kabupaten */
        return view('pendataan.datakab.index', compact('kab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendataan.datakab.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Fungsi simpan data ke beberapa tabel yang berelasi */
        $data = $request->all();
        // dd($data);
        $kab = new DataKab;
        $kab->nama_kabupaten = $data['nama_kabupaten'];
        $kab->save();

        $kec = new DataKec;
        $kec->kabupaten_id = $kab->id;
        $kec->nama_kecamatan = $data['nama_kecamatan'];
        $kec->save();

        $desa = new DataDesa;
        $desa->kecamatan_id = $kec->id;
        $desa->kode_desa = $data['kode_desa'];
        $desa->nama_desa = $data['nama_desa'];
        $desa->reje_kampung = $data['reje_kampung'];
        $desa->nama_camat = $data['nama_camat'];
        $desa->nip = $data['nip'];
        $desa->alamat = $data['alamat'];
        $desa->kode_pos = $data['kode_pos'];
        $desa->save();

        return redirect('/datakab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKab  $dataKab
     * @return \Illuminate\Http\Response
     */
    public function show(DataKab $dataKab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKab  $dataKab
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKab $dataKab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKab  $dataKab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKab $dataKab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKab  $dataKab
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKab $dataKab)
    {
        //
    }
}
