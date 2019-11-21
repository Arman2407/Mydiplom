@extends('content')

@section('payment')
    <section class="ticket">

        @include('ticket.header', ['ticketHeader'=>'Вы выбрали билеты:'])
        
        <div class="ticket__info-wrapper">

            @include('ticket.info')

            <p class="ticket__info">Стоимость: 
                <span class="ticket__details ticket__cost">{{ $ticket->cost() }}</span> 
                рублей
            </p>
        
            <button class="acceptin-button" onclick="location.href='/tickets/'" >Получить код бронирования</button>
        
            <p class="ticket__hint">После оплаты билет будет доступен в этом окне, а также придёт вам на почту. Покажите QR-код нашему контроллёру у входа в зал.</p>
            <p class="ticket__hint">Приятного просмотра!</p>
        </div>
    </section> 
@endsection