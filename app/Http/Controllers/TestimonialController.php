<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonials = Testimonial::latest()->paginate(5);

        $testimonials = Testimonial::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $testimonials->appends($request->only('search'));

        return view('testimonial.index', compact('testimonials'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
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
            'nama' => 'required',
            'instansi' => 'required',
            'isi_testimoni' => 'required',
            'gambar' => 'image|file|required',
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Testimonial::create($validate);
        return redirect()->route('testimonial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'isi_testimoni' => 'required',
            'gambar' => 'image|file|required',
        ]);


        $validate['gambar'] = $request->file('gambar')->store('post-images/slider');

        $testimonial->update($validate);
        return redirect()->route('testimonial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Berhasil Menghapus Data!');
    }
    public function deleteCheckedTestimonial(Request $request)
    {
        $ids = $request->ids;
        Testimonial::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
