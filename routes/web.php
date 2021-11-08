<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return Inertia\Inertia::render('Welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/', function () {
    return Inertia\Inertia::render('Home');
})->name('home');

Route::get('/about-us', function () {
    return Inertia\Inertia::render('AboutUs');
})->name('about-us');

Route::get('/our-fates', function () {
    return Inertia\Inertia::render('OurFates');
})->name('our-fates');

Route::get('/gallery', function () {
    return Inertia\Inertia::render('Gallery');
})->name('gallery');

Route::get('/frequent-questions', function () {
    return Inertia\Inertia::render('FrequentQuestions');
})->name('frequent-questions');

Route::get('/contact-us', function () {
    return Inertia\Inertia::render('ContactUs');
})->name('contact-us');
