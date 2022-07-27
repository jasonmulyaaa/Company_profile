<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $blogss = Blog::latest()->paginate(6);
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();

        $blogss = Blog::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(6);

        $blogss->appends($request->only('search'));

        return view('user.blogs.index', compact('blogss', 'konfigurasi', 'contactus'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();
        return view('user.blogs.show', compact('blog', 'konfigurasi', 'contactus'));
    }
}
