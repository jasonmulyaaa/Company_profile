<?php

namespace App\Http\Controllers;

use App\Models\Kategoriblog;
use Illuminate\Http\Request;

class KategoriBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategoriblogs = Kategoriblog::latest()->paginate(5);

        $kategoriblogs = Kategoriblog::when($request->search, function ($query) use ($request) {
            $query->where('kategori', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $kategoriblogs->appends($request->only('search'));

        return view('kategoriblog.index', compact('kategoriblogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriblog.create');
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

        Kategoriblog::create($request->all());
        return redirect()->route('kategoriblog.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategoriblog  $kategoriblog
     * @return \Illuminate\Http\Response
     */
    public function show(Kategoriblog $kategoriblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategoriblog  $kategoriblog
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategoriblog $kategoriblog)
    {
        return view('kategoriblog.edit', compact('kategoriblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategoriblog  $kategoriblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategoriblog $kategoriblog)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $kategoriblog->update($request->all());
        return redirect()->route('kategoriblog.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategoriblog  $kategoriblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategoriblog $kategoriblog)
    {
        $kategoriblog->delete();
        return redirect()->route('kategoriblog.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedKategoriblog(Request $request)
    {
        $ids = $request->ids;
        Kategoriblog::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
