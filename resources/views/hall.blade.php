@extends('content')

@section('hall')
    <section class="buying">
        <div class="buying__info">
            <div class="buying__info-description">
            <h2 class="buying__info-title">{{ $seance->movie()->title }}}</h2>
                <p class="buying__info-start">Начало сеанса: {{ $seance->time_start() }}</p>
                <p class="buying__info-hall">Зал {{ $seance->hall()->title }}</p>          
            </div>
            <div class="buying__info-hint">
                <p>Тапните дважды,<br>чтобы увеличить</p>
            </div>
        </div>
        <div class="buying-scheme">
            <div class="buying-scheme__wrapper">
                @foreach ($seance->hall()->rows as $row)
                    <div class="buying-scheme__row">
                        @foreach ($seance->hall()->seats as $seat)
                            <span class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <div class="buying-scheme__legend">
                <div class="col">
                    <p class="buying-scheme__legend-price">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        Свободно (
                        <span class="buying-scheme__legend-value">{{ $hall->price }}</span>
                        руб)
                    </p>
                    <p class="buying-scheme__legend-price">
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span>
                        Свободно VIP (
                        <span class="buying-scheme__legend-value">{{ $hall->price_vip }}</span>
                        руб)
                    </p>            
                </div>
                <div class="col">
                    <p class="buying-scheme__legend-price">
                        <span class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        Занято
                    </p>
                    <p class="buying-scheme__legend-price">
                        <span class="buying-scheme__chair buying-scheme__chair_selected"></span>
                        Выбрано
                    </p>                    
                </div>
            </div>
        </div>
        <button class="acceptin-button" onclick="location.href='payment.html'" >Забронировать</button>
    </section>         
@endsection