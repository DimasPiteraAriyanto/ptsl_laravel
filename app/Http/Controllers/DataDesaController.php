<?php

namespace App\Http\Controllers;

use App\Models\DataDesa;
use Illuminate\Http\Request;

class DataDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = DataDesa::all();
        return view('pemberkasan.datadesa.index', compact('desa'));
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
     * @param  \App\Models\DataDesa  $dataDesa
     * @return \Illuminate\Http\Response
     */
    public function show(DataDesa $dataDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataDesa  $dataDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataDesa $dataDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataDesa  $dataDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataDesa $dataDesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataDesa  $dataDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataDesa $dataDesa)
    {
        //
    }
}
