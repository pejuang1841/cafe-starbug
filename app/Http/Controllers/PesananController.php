<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
Use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Menu;
use Alert;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pesanan::get();
        return view('view.viewpesanan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::get();
        $pelanggan = Pelanggan::get();
        $menu = Menu::get();
        return view("form.formpesanan", compact('pegawai','pelanggan','menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pesanan;
        $data->id_pegawai = $request->id_pegawai;
        $data->id_pelanggan = $request->id_pelanggan;
        $data->no_telepon = $request->no_telepon;
        $data->id_menu = $request->id_menu;
        $data->jumlah_pesanan = $request->jumlah_pesanan;
        $data->total_pembayaran = $request->total_pembayaran;
        $data->metode_pembayaran = $request->metode_pembayaran;
        if($data->save()){
            Alert::success('berhasil Menyimpan');
            return redirect()->back();
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
