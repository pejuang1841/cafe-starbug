<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::get();
        return view('view.viewpegawai', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form.formpegawai");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pegawai;
        $data->nama_pegawai = $request->nama_pegawai;
        $data->alamat = $request->alamat;
        if($data->save()){
            return ['status' => 'berhasil menyimpan'];
        }else{
            return ['status' => 'Tidka berhasil menyimpan'];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
