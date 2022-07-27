<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FormContactusController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KmkController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\KategoriGalleryController;
use App\Http\Controllers\KategoriBlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutusUserController;
use App\Http\Controllers\ServiceUserController;
use App\Http\Controllers\GalleryUserController;
use App\Http\Controllers\TestimonialUserController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\FormContactUsUserController;
use App\Http\Controllers\KonfigurasiUserController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Admin Route
Route::resource('aboutus', AboutusController::class)->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('contactus', ContactusController::class)->middleware('auth');
Route::resource('formcontactus', FormContactusController::class)->middleware('auth');
Route::resource('gallery', GalleryController::class)->middleware('auth');
Route::resource('kmk', KmkController::class)->middleware('auth');
Route::resource('konfigurasi', KonfigurasiController::class)->middleware('auth');
Route::resource('service', ServiceController::class)->middleware('auth');
Route::resource('slider', SliderController::class)->middleware('auth');
Route::resource('testimonial', TestimonialController::class)->middleware('auth');
Route::resource('kategorigallery', KategoriGalleryController::class)->middleware('auth');
Route::resource('kategoriblog', KategoriBlogController::class)->middleware('auth');

//User Route
Route::resource('/', HomePageController::class);
Route::resource('navbar', HomePageController::class);
Route::resource('about', AboutusUserController::class);
Route::resource('services', ServiceUserController::class);
Route::resource('galleries', GalleryUserController::class);
Route::resource('testimonials', TestimonialUserController::class);
Route::resource('blogs', BlogUserController::class);
Route::resource('formcontactususer', FormContactUsUserController::class);

Route::delete('/selected-slider', [SliderController::class, 'deleteCheckedSlider'])->name('slider.deleteSelected');
Route::delete('/selected-service', [ServiceController::class, 'deleteCheckedService'])->name('service.deleteSelected');
Route::delete('/selected-gallery', [GalleryController::class, 'deleteCheckedGallery'])->name('gallery.deleteSelected');
Route::delete('/selected-testimonial', [TestimonialController::class, 'deleteCheckedTestimonial'])->name('testimonial.deleteSelected');
Route::delete('/selected-blog', [BlogController::class, 'deleteCheckedBlog'])->name('blog.deleteSelected');
Route::delete('/selected-kategorigallery', [KategoriGalleryController::class, 'deleteCheckedKategorigallery'])->name('kategorigallery.deleteSelected');
Route::delete('/selected-kategoriblog', [KategoriBlogController::class, 'deleteCheckedKategoriblog'])->name('kategoriblog.deleteSelected');



