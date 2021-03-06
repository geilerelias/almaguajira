<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

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

Route::get('/our-fates/detail/{id}', function ($id) {
    return Inertia\Inertia::render('OurFatesDetails', ['id' => $id]);
})->name('our-fates-details');

Route::get('/gallery', function () {
    return Inertia\Inertia::render('Gallery');
})->name('gallery');

Route::get('/frequent-questions', function () {
    return Inertia\Inertia::render('FrequentQuestions');
})->name('frequent-questions');

Route::get('/contact-us', function () {
    return Inertia\Inertia::render('ContactUs');
})->name('contact-us');

Route::post('/send-mail', [contactController::class, 'send'])->name('send-email');

Route::get('/{page}/{folder?}', function ($page, $folder) {
    $directory = base_path() . '/resources/images/' . $page . '/' . $folder;
    $dirint = dir($directory);
    $images = array();
    while (($archivo = $dirint->read()) !== false) {
        if ($archivo != "." && $archivo != "..") {
            array_push($images, $archivo);
        }
    }
    $dirint->close();
    return json_encode($images);
});


Route::get('/src/{page}/{folder?}/{filename}', function ($page, $folder = "null", $filename) {
    try {
        $path = '';
        if ($folder == "null") {
            $path = base_path() . '/resources/images/' . $page . '/' . $filename;
        } else {
            $path = base_path() . '/resources/images/' . $page . '/' . $folder . '/' . $filename;
            //$path = storage_path() . '/app/' . $folder . '/' . $filename;
        }
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;


    } catch (Throwable $th) {
        return $th->getMessage();
    }
});
