<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavouriteBooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,20),
            'book_id'=>rand(1,50)
        ];
    }
}
