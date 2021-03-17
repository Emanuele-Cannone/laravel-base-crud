@extends('layouts.app')

@section('title', 'auto-title')

@section('content')
    <h1>io sono la pagina auto</h1>
    @foreach ($Veicoli as $item)
        
    <h2>{{ $item->id }}</h2>
    @endforeach
@endsection