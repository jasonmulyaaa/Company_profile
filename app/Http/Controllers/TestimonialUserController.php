<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class TestimonialUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $testimonial = Testimonial::all();
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();
        return view('user.testimonials.index', compact('testimonial', 'konfigurasi', 'contactus'));
    }
}
