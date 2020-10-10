@php
$cards = config('db-prodotti');
$lunghe = [];
$corte = [];
$cortissime = [];

foreach ($cards as $card) {
    if($card['tipo']== 'lunga'){
        $lunghe[] = $card;
    }elseif ($card['tipo']== 'corta') {
        $corte[] = $card;
    } elseif ($card['tipo']== 'cortissima') {
        $cortissime[] = $card;
    }
}

@endphp


@extends('layout.app')
@section('titolo','prodotti')
    
@section('central-section')
    @include('partials/main_prodotti')
@endsection


