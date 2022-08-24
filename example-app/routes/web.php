<?php

use App\Http\Controllers\postController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get("/", [postController::class, "home"]);

Route::get("/about", [postController::class, "about"]);

Route::get("/blog", [postController::class, "posts"]);

//halaman single post
Route::get("/posts/{post:slug}", [postController::class, "post"]);

Route::get("/categories", [postController::class, "categories"]);

Route::get("/categories/{category:slug}", [postController::class, "category"]);
