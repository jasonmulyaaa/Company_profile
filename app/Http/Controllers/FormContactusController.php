<?php

namespace App\Http\Controllers;

use App\Models\Formcontactus;
use Illuminate\Http\Request;

class FormContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $formcontactuss = Formcontactus::latest()->paginate(10);

        $formcontactuss = Formcontactus::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(150);

        $formcontactuss->appends($request->only('search'));

        return view('formcontactus.index', compact('formcontactuss'))->with('i', (request()->input('page', 1) - 1) * 10);
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
        $request->validate([
            'nama' => 'required',
            'subjek' => 'required',
            'keterangan' => 'required',
        ]);

        Formcontactus::create($request->all());
        return redirect()->route('user.formcontactus.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formcontactus  $formcontactus
     * @return \Illuminate\Http\Response
     */
    public function show(Formcontactus $formcontactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formcontactus  $formcontactus
     * @return \Illuminate\Http\Response
     */
    public function edit(Formcontactus $formcontactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formcontactus  $formcontactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formcontactus $formcontactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formcontactus  $formcontactus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formcontactus $formcontactus)
    {
        //
    }
}
