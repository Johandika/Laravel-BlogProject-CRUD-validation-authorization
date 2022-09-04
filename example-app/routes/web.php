<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

Route::get("/", [postController::class, "home"]);

Route::get("/about", [postController::class, "about"]);

Route::get("/blog", [postController::class, "posts"]);

Route::get("/posts/{slug}", [postController::class, "show"]);

Route::get("/categories", [postController::class, "categories"]);

Route::get("/login", [loginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [loginController::class, "authenticate"]);
Route::post("/logout", [loginController::class, "logout"]);

Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/dashboard", function(){
return view("dashboard.index");
})->middleware("auth");

Route::get('/dashboard/post/checkSLug', [DashboardPostController::class, "checkSlug"])->middleware("auth");
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware("auth");

// Route::get("/categories/{category:slug}", [postController::class, "category"]);

// Route::get("/authors/{author:username}", [postController::class, "author"]);