<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategoriblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::latest()->paginate(5);
        $kategoriblog = Kategoriblog::all();

        $blogs = Blog::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $blogs->appends($request->only('search'));

        return view('blog.index', compact('blogs', 'kategoriblog', $kategoriblog))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriblog = Kategoriblog::all();
        return view('blog.create', compact('kategoriblog', $kategoriblog));
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

        Blog::create($validate);
        return redirect()->route('blog.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $kategoriblog = Kategoriblog::all();
        return view('blog.edit', compact('blog', 'kategoriblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validate = $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'foto' => 'image|file|required',
            'deskripsi' => 'required'
        ]);


        $validate['foto'] = $request->file('foto')->store('post-images/slider');

        $blog->update($validate);
        return redirect()->route('blog.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedBlog(Request $request)
    {
        $ids = $request->ids;
        Blog::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
