<?php

namespace App\Http\Controllers;

use App\Models\mata_pelajaran;
use App\Http\Requests\Storemata_pelajaranRequest;
use App\Http\Requests\Updatemata_pelajaranRequest;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storemata_pelajaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemata_pelajaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mata_pelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(mata_pelajaran $mata_pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mata_pelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(mata_pelajaran $mata_pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemata_pelajaranRequest  $request
     * @param  \App\Models\mata_pelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemata_pelajaranRequest $request, mata_pelajaran $mata_pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mata_pelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(mata_pelajaran $mata_pelajaran)
    {
        //
    }
}
