<?php

namespace App\Http\Controllers;

use App\Models\DataKec;
use Illuminate\Http\Request;

class DataKecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kec = DataKec::all();
        return view('pendataan.datakec.index', compact('kec'));
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
     * @param  \App\Models\DataKec  $dataKec
     * @return \Illuminate\Http\Response
     */
    public function show(DataKec $dataKec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKec  $dataKec
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKec $dataKec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKec  $dataKec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKec $dataKec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKec  $dataKec
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKec $dataKec)
    {
        //
    }
}
