<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class postController extends Controller
{
    public function home()
    {
        return view("home", [
            "titles" => "Home",
        ]);
    }

    public function about()
    {
        return view("about", [
            "titles" => "About",
            "name" => "Johandika Syahputra Lubis",
            "email" => "johanelyosse@gmail.com",
            "image" => "Johandika.jpg",
        ]);
    }

    public function posts()
    {
        return view("posts", [
            "titles" => "Posts",
            "seluruhPostingan" => Post::all(),
            // "seluruhPostingan" => Post::with("category", "user")->all(),
        ]);
    }

    // Slug yang udah bisa
    public function show($slug)
    {
        return view("post", [
            "titles" => "Single Post",
            "seluruhPostingan" => Post::find($slug),
        ]);
    }

    // // Slug id yang sebelumnya
    // public function show($slug)
    // {
    //     return view("post", [
    //         "titles" => "Single Post",
    //         "seluruhPostingan" => Post::find($slug),
    //     ]);
    // }

    // public function show(Post $post)
    // {
    //     return view("post", [
    //         "titles" => "Single Post",
    //         "post" => $post,
    //     ]);
    // }

    public function categories()
    {
        return view("categories", [
            "titles" => "Post Categories",
            "categories" => Category::all(),
        ]);
    }

    public function category(Category $category)
    {
        return view("category", [
            "titles" => $category->name,
            "seluruhPostingan" => $category->posts,
            "category" => $category->name,
        ]);
    }
}
