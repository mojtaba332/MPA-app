<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            ['title' => 'Shape of You', 'artist' => 'Ed Sheeran', 'genre_id' => 1, 'duration_seconds' => 240, 'released_at' => '2017-01-06'],
            ['title' => 'Bohemian Rhapsody', 'artist' => 'Queen', 'genre_id' => 2, 'duration_seconds' => 354, 'released_at' => '1975-10-31'],
            ['title' => 'Take Five', 'artist' => 'Dave Brubeck', 'genre_id' => 3, 'duration_seconds' => 324, 'released_at' => '1959-09-21'],
            ['title' => 'Lose Yourself', 'artist' => 'Eminem', 'genre_id' => 4, 'duration_seconds' => 326, 'released_at' => '2002-10-28'],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
