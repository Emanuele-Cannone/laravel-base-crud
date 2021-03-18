@extends('layouts.app')

@section('title', 'auto-title')

@section('content')
    <h1>io sono la pagina auto</h1>
    @foreach ($Veicoli as $item)
        
    <h2>{{ $item->marca }} {{ $item->modello }}</h2>
    <ul>
        <li>Numero Stock {{ $item->id }}</li>
        <li><a href="{{ route('vehicles.show', ['vehicle'=>$item->id]) }}">Dettagli</a></li>
    </ul>
    @endforeach
@endsection
