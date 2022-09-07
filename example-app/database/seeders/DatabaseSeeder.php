<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
        ]);

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design",
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        User::create([
            "name" => "Johandika Syahputra Lubis",
            "username" => "Johandika",
            "email" => "johanelyosse@gmail.com",
            "password" => bcrypt("kmzway87ac"),
        ]);

        // User::create([
        //     "name" => "Novia Marlina",
        //     "email" => "noviamarlina17@gmail.com",
        //     "password" => bcrypt("12345"),
        // ]);

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "excerpt" =>
        //         "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea velit quo quia recusandae, modi maxime libero dicta quos pariatur in.",
        //     "body" =>
        //         "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex porro aperiam illo similique minus assumenda accusamus asperiores impedit iste labore voluptas facilis vitae fugit totam ad optio ea veniam provident, id earum pariatur vero dicta cum? Ullam, voluptate. Delectus excepturi mollitia iusto voluptates perferendis inventore debitis magni. Nobis non est unde inventore aut maiores cumque ullam iure saepe, doloribus dolorem dolor corporis eveniet ex. Tempore, nam incidunt asperiores, nemo voluptates corporis velit temporibus tenetur animi quam repellat soluta repellendus quaerat officiis aperiam ratione adipisci, explicabo dolore. Nostrum soluta repudiandae deserunt molestiae enim modi, itaque temporibus dolor recusandae sequi possimus!",
        // ]);

        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "excerpt" =>
        //         "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea velit quo quia recusandae, modi maxime libero dicta quos pariatur in.",
        //     "body" =>
        //         "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex porro aperiam illo similique minus assumenda accusamus asperiores impedit iste labore voluptas facilis vitae fugit totam ad optio ea veniam provident, id earum pariatur vero dicta cum? Ullam, voluptate. Delectus excepturi mollitia iusto voluptates perferendis inventore debitis magni. Nobis non est unde inventore aut maiores cumque ullam iure saepe, doloribus dolorem dolor corporis eveniet ex. Tempore, nam incidunt asperiores, nemo voluptates corporis velit temporibus tenetur animi quam repellat soluta repellendus quaerat officiis aperiam ratione adipisci, explicabo dolore. Nostrum soluta repudiandae deserunt molestiae enim modi, itaque temporibus dolor recusandae sequi possimus!",
        // ]);

        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "excerpt" =>
        //         "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea velit quo quia recusandae, modi maxime libero dicta quos pariatur in.",
        //     "body" =>
        //         "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex porro aperiam illo similique minus assumenda accusamus asperiores impedit iste labore voluptas facilis vitae fugit totam ad optio ea veniam provident, id earum pariatur vero dicta cum? Ullam, voluptate. Delectus excepturi mollitia iusto voluptates perferendis inventore debitis magni. Nobis non est unde inventore aut maiores cumque ullam iure saepe, doloribus dolorem dolor corporis eveniet ex. Tempore, nam incidunt asperiores, nemo voluptates corporis velit temporibus tenetur animi quam repellat soluta repellendus quaerat officiis aperiam ratione adipisci, explicabo dolore. Nostrum soluta repudiandae deserunt molestiae enim modi, itaque temporibus dolor recusandae sequi possimus!",
        // ]);
    }
}
