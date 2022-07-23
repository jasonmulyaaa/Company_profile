<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class GalleryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $gallery = Gallery::all();
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();
        return view('user.galleries.index', compact('gallery', 'konfigurasi', 'contactus'));
    }
}
