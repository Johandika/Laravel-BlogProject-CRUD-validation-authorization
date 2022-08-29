<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(3, 6)),
            "slug" => $this->faker->slug(),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 3),
            "excerpt" => $this->faker->paragraph(),
            // "body" => $this->faker->paragraph(),
            "body" => collect($this->faker->paragraphs(5))
                ->map(function ($p) {
                    return "<p>$p</p>";
                })
                ->implode(""),
        ];
    }
}
