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
            'user_id' => rand(1, 20),
            'name'=>$this->faker->name,
            'description'=>$this->faker->paragraph,
            'genres'=> 'Drama, Romance, Comedy',
            'rating'=> rand(1, 10),
            'released_date'=> $this->faker->date,
            'book_id'=> $this->faker->unique()->name,
            'file_path'=> $this->faker->image('public/storage/images',230,290, '', false),
            'author'=> $this->faker->name,
            'ISBN13'=>$this->faker->numberBetween(10000000, 99999999),
            'ISBN10'=>$this->faker->numberBetween(10000000, 99999999),
            'producerName'=>$this->faker->name,
        ];
    }
}
