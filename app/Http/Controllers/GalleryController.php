<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Kategorigallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gallerys = Gallery::latest()->paginate(5);
        $kategorigallery = Kategorigallery::all();
        $gallerys = Gallery::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $gallerys->appends($request->only('search'));

        return view('gallery.index', compact('gallerys', 'kategorigallery', $kategorigallery))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorigallery = Kategorigallery::all();
        return view('gallery.create', compact('kategorigallery', $kategorigallery));
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
            'kategori' => 'required',
            'judul' => 'required',
            'foto' => 'image|file|required',
            'deskripsi' => 'required'
        ]);

        $image = $request->file('foto')->store('post-images/slider');

        $validate['foto'] = $image;

        gallery::create($validate);
        return redirect()->route('gallery.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $kategorigallery = Kategorigallery::all();
        return view('gallery.edit', compact('gallery', 'kategorigallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validate = $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'foto' => 'image|file|required',
            'deskripsi' => 'required'
        ]);


        $validate['foto'] = $request->file('foto')->store('post-images/slider');

        $gallery->update($validate);
        return redirect()->route('gallery.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedGallery(Request $request)
    {
        $ids = $request->ids;
        Gallery::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
