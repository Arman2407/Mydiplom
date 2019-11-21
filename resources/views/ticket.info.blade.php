@extends('main')

@section('ticket-info')
    <p class="ticket__info">На фильм: 
        <span class="ticket__details ticket__title">
            {{ $ticket->movie()->title }}
        </span>
    </p>
    <p class="ticket__info">Места: 
        <span class="ticket__details ticket__chairs">
            {{ $ticket->seats() }}
        </span>
    </p>
    <p class="ticket__info">В зале: 
        <span class="ticket__details ticket__hall">
            {{ $ticket->hall()->title }}
        </span>
    </p>
    <p class="ticket__info">Начало сеанса: 
        <span class="ticket__details ticket__start">
            {{ $ticket->seance()->start_time }}
        </span>
    </p>
@endsection