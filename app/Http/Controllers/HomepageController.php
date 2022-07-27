<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Aboutus;
use App\Models\Kmk;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Konfigurasi;
use App\Models\Contactus;
use App\Models\Visit;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::limit(4)->get();
        $aboutus = Aboutus::all();
        $kmk = Kmk::all();
        $service = Service::limit(5)->get();
        $gallery = Gallery::limit(3)->get();
        $testimonial = Testimonial::all();
        $blog = Blog::limit(6)->latest()->get();
        $konfigurasi = Konfigurasi::all();
        $contactus = Contactus::all();

        $totalvisit = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'visit_count' => $totalvisit,
            'visit_date' => date('Y-m-d'),
        ];

        Visit::create($validated);

        return view('welcome', compact('slider', 'aboutus', 'kmk', 'service', 'gallery', 'testimonial', 'blog', 'konfigurasi', 'contactus'));
    }
}
