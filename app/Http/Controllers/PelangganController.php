<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Alert;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggan::get();
        return view('view.viewpelanggan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form.formpelanggan");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pelanggan;
        $data->nama_pelanggan = $request->nama_pelanggan;
        $data->nomor_telpon = $request->nomor_telpon;
        $data->alamat = $request->alamat;
        if ($data->save()) {
            Alert::success('Hore!', 'Data berhasil ditambahkan');
            return redirect()->back();
        }else {
            return ['status' => 'Tidak Behasil di Kirim'];
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
