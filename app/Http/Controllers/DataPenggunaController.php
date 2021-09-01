<?php

namespace App\Http\Controllers;

use App\Models\DataPengguna;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendataan.datapengguna.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function show(DataPengguna $dataPengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPengguna $dataPengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPengguna $dataPengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPengguna  $dataPengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPengguna $dataPengguna)
    {
        //
    }
}
