<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasis = Konfigurasi::latest()->paginate(10);
        return view('konfigurasi.index', compact('konfigurasis'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konfigurasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'favicon' => 'image|file|required',
            'metadata' => 'required',
            'floatingimg' => 'required'
        ]);

        $image = $request->file('favicon')->store('post-images/slider');

        $validate['favicon'] = $image;

        Konfigurasi::create($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konfigurasi $konfigurasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konfigurasi $konfigurasi)
    {
        return view('konfigurasi.edit', compact('konfigurasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konfigurasi $konfigurasi)
    {
        $validate = $request->validate([
            'title' => 'required',
            'favicon' => 'image|file|required',
            'metadata' => 'required',
            'floatingimg' => 'required'
        ]);

        $image = $request->file('favicon')->store('post-images/slider');

        $validate['favicon'] = $image;

        $konfigurasi->update($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konfigurasi $konfigurasi)
    {
        //
    }
}
