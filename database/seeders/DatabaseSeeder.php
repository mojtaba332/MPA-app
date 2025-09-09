<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Genre::truncate();

        $genres = [
            ['name' => 'Pop', 'slug' => 'pop'],
            ['name' => 'Rock', 'slug' => 'rock'],
            ['name' => 'Jazz', 'slug' => 'jazz'],
            ['name' => 'Hip-Hop', 'slug' => 'hip-hop'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}