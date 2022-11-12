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
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Arman Dwi Pangestu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, amet autem! Deleniti, quibusdam molestiae labore libero aperiam dicta impedit fugiat mollitia eligendi, laudantium, laboriosam blanditiis dignissimos suscipit! Itaque iste magnam illo vero voluptates ut tempora maxime tempore! Possimus natus, veritatis laboriosam, quam neque ex ad ratione iure temporibus officiis repellat et laborum labore in recusandae! Repudiandae cumque dicta atque ab, omnis deleniti itaque, in rerum amet minus, libero quod enim necessitatibus officiis beatae nihil quasi eligendi! Maiores porro nobis voluptas?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea dolores quidem dignissimos reiciendis rerum quae fugiat officia explicabo nesciunt quasi itaque error minima fugit quos, omnis possimus doloremque consequuntur, nisi ducimus ipsa placeat repellat molestias. Eveniet, deleniti maiores dolor quia accusantium amet maxime atque quam perspiciatis aspernatur alias incidunt quos adipisci quo mollitia ipsa voluptatibus numquam architecto laborum voluptatem. Debitis ratione praesentium vitae doloribus, ab recusandae minima asperiores ullam aspernatur beatae! Blanditiis, enim sunt beatae molestias dolor odio impedit! Atque inventore distinctio consequatur accusamus, velit numquam sapiente, laborum cupiditate, cum quidem possimus aspernatur delectus laboriosam est optio commodi unde?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});