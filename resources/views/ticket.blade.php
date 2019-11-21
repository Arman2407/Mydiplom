@extends('content')

@section('ticket')
    <section class="ticket">
    
        @include('ticket.header', ['ticketHeader'=>'Электронный билет'])
        
        <div class="ticket__info-wrapper">

            @include('ticket-info')      
            
            <img class="ticket__info-qr" src="{{ $ticket->qr_code }}">
        
            <p class="ticket__hint">Покажите QR-код нашему контроллеру для подтверждения бронирования.</p>
            <p class="ticket__hint">Приятного просмотра!</p>
        </div>
    </section> 
@endsection