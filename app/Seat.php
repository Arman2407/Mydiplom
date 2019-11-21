<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = [
        'hall_id',
        'number',
        'row_number',
        'is_vip'
    ];
    protected $table = 'seats';

    public function hall() {
        return $this->belongsTo('App\Hall', 'hall_id', 'id');
    }
}
