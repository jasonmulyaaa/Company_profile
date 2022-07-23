<?php

namespace App\Http\Controllers;

use App\Models\Kategorigallery;
use Illuminate\Http\Request;

class KategoriGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategorigallerys = Kategorigallery::latest()->paginate(10);

        $kategorigallerys = Kategorigallery::when($request->search, function ($query) use ($request) {
            $query->where('kategori', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $kategorigallerys->appends($request->only('search'));

        return view('kategorigallery.index', compact('kategorigallerys'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorigallery.create');
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
            'kategori' => 'required'
        ]);

        Kategorigallery::create($request->all());
        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorigallery  $kategorigallery
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorigallery $kategorigallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorigallery  $kategorigallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorigallery $kategorigallery)
    {
        return view('kategorigallery.edit', compact('kategorigallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorigallery  $kategorigallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorigallery $kategorigallery)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $kategorigallery->update($request->all());
        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorigallery  $kategorigallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorigallery $kategorigallery)
    {
        $kategorigallery->delete();
        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedKategorigallery(Request $request)
    {
        $ids = $request->ids;
        Kategorigallery::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
