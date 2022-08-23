<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

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

    public function index()
    {
        return view("posts", [
            "titles" => "Posts",
            "seluruhPostingan" => Post::all(),
        ]);
    }

    public function show($id)
    {
        return view("post", [
            "titles" => "Single Post",
            "seluruhPostingan" => Post::find($id),
        ]);
    }
}
