<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home", [
        "titles" => "Home",
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "titles" => "About",
        "name" => "Johandika Syahputra Lubis",
        "email" => "johanelyosse@gmail.com",
        "image" => "Johandika.jpg",
    ]);
});

Route::get("/blog", function () {
    return view("posts", [
        "titles" => "Posts",
        "seluruhPostingan" => Post::all(),
    ]);
});

//halaman single post
Route::get("posts/{slug}", function ($slug) {
    return view("post", [
        "titles" => "Single Post",
        "seluruhPostingan" => Post::find($slug),
    ]);
});
