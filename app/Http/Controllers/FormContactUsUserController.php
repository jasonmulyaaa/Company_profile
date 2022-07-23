<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formcontactus;
use App\Models\Contactus;
use App\Models\Konfigurasi;

class FormContactUsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = Contactus::all();
        $konfigurasi = Konfigurasi::all();
        return view('user.formcontactususer.index', compact('contactus', 'konfigurasi'));
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
            'g-recaptcha-response' => 'required|captcha',
        ],
        [
            'g-recaptcha-response.required' => 'Mohon diperiksa kembali apakah anda robot atau tidak!'
        ]
    
    );

        Formcontactus::create($request->all());
        return redirect()->route('formcontactususer.index')->with('success', 'Pesan Anda Berhasil Terkirim!');
    }
}
