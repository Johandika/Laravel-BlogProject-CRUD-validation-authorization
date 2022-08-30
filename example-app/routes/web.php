<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Models\User;

Route::get("/", [postController::class, "home"]);

Route::get("/about", [postController::class, "about"]);

Route::get("/blog", [postController::class, "posts"]);

Route::get("/posts/{slug}", [postController::class, "show"]);

Route::get("/categories", [postController::class, "categories"]);

// Route::get("/categories/{category:slug}", [postController::class, "category"]);

// Route::get("/authors/{author:username}", [postController::class, "author"]);
