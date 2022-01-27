<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\FavouriteBooks;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(20)->create();
        Books::factory(50)->create();
        FavouriteBooks::factory(100)->create();
    }
}
