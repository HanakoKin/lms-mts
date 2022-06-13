<?php

namespace App\Http\Controllers;

use App\Models\tugas_siswa;
use App\Http\Requests\Storetugas_siswaRequest;
use App\Http\Requests\Updatetugas_siswaRequest;

class TugasSiswaController extends Controller
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
     * @param  \App\Http\Requests\Storetugas_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetugas_siswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tugas_siswa  $tugas_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(tugas_siswa $tugas_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tugas_siswa  $tugas_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(tugas_siswa $tugas_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetugas_siswaRequest  $request
     * @param  \App\Models\tugas_siswa  $tugas_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetugas_siswaRequest $request, tugas_siswa $tugas_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tugas_siswa  $tugas_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tugas_siswa $tugas_siswa)
    {
        //
    }
}
