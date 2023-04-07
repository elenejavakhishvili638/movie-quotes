<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // // tried
        // // Seed movies table
        // Movie::factory(5)->create();

        // // Seed quotes table in English
        // app()->setLocale('en');
        // $movies = Movie::all();
        // $movies->each(function ($movie) {
        //     Quote::factory(2)->create([
        //         'movie_id' => $movie->id,
        //     ]);
        // });

        // // Seed quotes table in Georgian
        // app()->setLocale('ka');
        // $movies = Movie::all();
        // $movies->each(function ($movie) {
        //     Quote::factory(2)->create([
        //         'movie_id' => $movie->id,
        //     ]);
        // });

        // used
        Movie::factory(5)->create();
        Quote::factory(10)->create();

        // old
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
