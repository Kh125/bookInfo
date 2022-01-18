<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $filepath = storage_path('images');
        return [
            'users_id' => rand(1, 10),
            'name'=>$this->faker->name,
            'description'=>$this->faker->paragraph,
            'genres'=> 'Drama, Romance, Comedy',
            'rating'=> rand(1, 10),
            'released_date'=> $this->faker->date,
            'book_id'=> $this->faker->unique()->name,
            'file_path'=> $this->faker->image('public/storage/images',230,290, '', false),
        ];
    }
}
