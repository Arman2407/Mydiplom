<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'seance_id',
        'seat_id',
        'qr_code'
    ];
    protected $table = 'tickets';

    private $ticket;

    public function seance() {
        return $this->belongsTo('App\Seance', 'seance_id', 'id');
    }

    public function seat() {
        return $this->belongsTo('App\Seat', 'seat_id', 'id');
    }

    public function test() {
        $ticket = ['id' => '444'];
        return $ticket;
    }
}
