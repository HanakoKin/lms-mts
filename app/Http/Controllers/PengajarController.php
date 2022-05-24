<?php

namespace App\Http\Controllers;

use App\Models\pengajar;
use App\Http\Requests\StorepengajarRequest;
use App\Http\Requests\UpdatepengajarRequest;

class PengajarController extends Controller
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
     * @param  \App\Http\Requests\StorepengajarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepengajarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajar $pengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepengajarRequest  $request
     * @param  \App\Models\pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepengajarRequest $request, pengajar $pengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengajar $pengajar)
    {
        //
    }
}
