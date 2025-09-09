<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
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
