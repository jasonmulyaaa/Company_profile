<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class AboutusUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $aboutus = Aboutus::all();
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();
        return view('user.about.index', compact('aboutus', 'konfigurasi', 'contactus'));
    }
}
