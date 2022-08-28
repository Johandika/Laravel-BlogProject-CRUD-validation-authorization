<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use PhpMyAdmin\UserPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function find($slug)
    {
        $posts = Post::all();
        return $posts->firstWhere("slug", $slug);
    }
}
