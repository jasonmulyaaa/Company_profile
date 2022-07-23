<?php

namespace App\Http\Controllers;

use App\Models\Kmk;
use Illuminate\Http\Request;

class KmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kmks = Kmk::latest()->paginate(10);
        return view('kmk.index', compact('kmks'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kmk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);

        Kmk::create($request->all());
        return redirect()->route('kmk.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kmk  $kmk
     * @return \Illuminate\Http\Response
     */
    public function show(Kmk $kmk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kmk  $kmk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kmk $kmk)
    {
        return view('kmk.edit', compact('kmk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kmk  $kmk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kmk $kmk)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);

        $kmk->update($request->all());
        return redirect()->route('kmk.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kmk  $kmk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kmk $kmk)
    {
        //
    }
}
