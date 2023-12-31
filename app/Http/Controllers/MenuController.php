<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Menu;
use Alert;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::get();
        return view('view.viewmenu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form.formmenu");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Menu;
        $data->nama_menu = $request->nama_menu;
        $data->harga = $request->harga;
        if ($data->save()) {
            Alert::success('Hore!', 'Data berhasil ditambahkan');
            return redirect()->back();
        }else{
            return ['status' => 'Menu Tidak Berhasil di Kirim'];
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
