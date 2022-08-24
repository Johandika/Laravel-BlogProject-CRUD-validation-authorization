<?php

use App\Http\Controllers\postController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get("/", [postController::class, "home"]);

Route::get("/about", [postController::class, "about"]);

Route::get("/blog", [postController::class, "index"]);

//halaman single post
Route::get("posts/{slug}", [postController::class, "show"]);
