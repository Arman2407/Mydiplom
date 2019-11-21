<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'hall_id',
        'movie_id',
        'start_time'
    ];
    protected $table = 'seances';

    public function tickets() {
        return $this->hasMany('App\Ticket', 'ticket_id', 'id');
    }

    public function hall() {
        return $this->belongsTo('App\Hall', 'hall_id', 'id');
    }

    public function movie() {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }
}
