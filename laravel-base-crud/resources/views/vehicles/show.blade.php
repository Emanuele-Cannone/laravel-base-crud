@extends('layouts.app')

@section('title', " $Veicoli->marca $Veicoli->modello ")

@section('content')

    <p>Marca: {{ $Veicoli->marca }}</p>
    <p>Modello: {{ $Veicoli->modello }}</p>
    <p>Anno: {{ $Veicoli->anno }}</p>
    <p>Cilindrata: {{ $Veicoli->cilindrata }}</p>
    
@endsection