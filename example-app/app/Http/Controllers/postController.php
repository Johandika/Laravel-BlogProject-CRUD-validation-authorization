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
            "titles" => "All Posts",
            "seluruhPostingan" => Post::with(["author", "category"])
                ->latest()
                ->get(),
            // "seluruhPostingan" => Post::with("category", "user")->all(),
        ]);
    }

    public function author(User $author)
    {
        return view("posts", [
            "titles" => "Post by Author : $author->name",
            "seluruhPostingan" => $author->seluruhPostingan->load(
                "category",
                "author"
            ),
        ]);
    }

    public function show($slug)
    {
        return view("post", [
            "titles" => "Post by Author : $",
            "seluruhPostingan" => Post::find($slug),
        ]);
    }

    public function categories()
    {
        return view("categories", [
            "titles" => "Post by Categories",
            "categories" => Category::all(),
        ]);
    }

    public function category(Category $category)
    {
        return view("posts", [
            "titles" => "Post by Category : $category->name",
            "seluruhPostingan" => $category->posts->load("author", "category"),
        ]);
    }
}
