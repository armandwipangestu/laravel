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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

/*
|--------------------------------------------------------------------------
| Mengirimkan data ke view
|--------------------------------------------------------------------------
|
| Untuk mengirimkan data ke view dari routes, cukup menambahkan koma
| setelah nama view yang mau ditampilkan, contoh:
| ```php
|   return view('nama_view', data)
| ```
| dibawah ini saya mengirimkan data ke view menggunakan associative array
|
*/

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Arman Dwi Pangestu",
        "email" => "armandwi.pangestu7@gmail.com",
        "image" => "arman.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts"
    ]);
});