<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'duration_time',
        'image_link'
    ];

    protected $table = 'movies';

    public function seances() {
        return $this->hasMany('App\Seance', 'movie_id', 'id');
    }
}
