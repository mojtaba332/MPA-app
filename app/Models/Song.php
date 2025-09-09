<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'genre_id',
        'duration_seconds',
        'released_at',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
