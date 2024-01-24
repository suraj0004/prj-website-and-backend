<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/contact-us', function () {
    return view('contact-us.index');
})->name('contact-us');
Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us');

Route::get('/testimonials', function () {
    return view('testimonials.index');
})->name('testimonials');


Route::post('/contact-us-submit-form', [ContactUsController::class, 'handleFormSubmit'])->name('contact-us.submit.form');
