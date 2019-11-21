<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'title',
        'rows_count',
        'seats_count',
        'price',
        'price_vip',
        'is_open'
    ];

    protected $table = 'halls';

    public function seats() {
        return $this->hasMany('App\Seat', 'hall_id', 'id');
    }

    public function seances() {
        return $this->hasMany('App\Seance', 'hall_id', 'id');
    }
}
