<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class ServiceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $service = Service::all();
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();
        return view('user.services.index', compact('service', 'konfigurasi', 'contactus'));
    }
}
