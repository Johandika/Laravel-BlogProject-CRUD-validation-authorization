<?php

namespace App\Models;

class Postingan
{
    private static $blog_posts = [
        [
            "title" => "Postingan 1",
            "slug" => "judul-post-pertama",
            "author" => "Johandika Syahputra Lubis",
            "body" =>
                "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum et aspernatur voluptatem temporibus? Expedita quod itaque quo voluptas, atque soluta temporibus nesciunt assumenda in exercitationem, sed architecto. Ratione explicabo, facilis magnam dolorum corrupti dolore maxime optio ex nisi sit placeat, quos culpa corporis quisquam ab illum. Inventore blanditiis facilis nam odit dolorem omnis nostrum labore veniam iure error rerum vitae numquam voluptatem cumque, est culpa excepturi eveniet enim maxime. Tempora amet quisquam ratione adipisci unde eum commodi accusantium aspernatur maiores?",
        ],
        [
            "title" => "Postingan 2",
            "slug" => "judul-post-kedua",
            "author" => "Novia Marlina",
            "body" =>
                "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum et aspernatur voluptatem temporibus? Expedita quod itaque quo voluptas, atque soluta temporibus nesciunt assumenda in exercitationem, sed architecto. Ratione explicabo, facilis magnam dolorum corrupti dolore maxime optio ex nisi sit placeat, quos culpa corporis quisquam ab illum. Inventore blanditiis facilis nam odit dolorem omnis nostrum labore veniam iure error rerum vitae numquam voluptatem cumque, est culpa excepturi eveniet enim maxime. Tempora amet quisquam ratione adipisci unde eum commodi accusantium aspernatur maiores?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($nilaiSlug)
    {
        $seluruhPostingan = static::all();
        return $seluruhPostingan->firstWhere("slug", $nilaiSlug);
    }
}
