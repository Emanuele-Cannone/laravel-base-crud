@extends('layouts.app')

@section('title', 'auto-title')

@section('content')
    <p>Anno: {{ $Veicoli->anno }}</p>
    <p>Cilindrata: {{ $Veicoli->cilindrata }}</p>
    
@endsection