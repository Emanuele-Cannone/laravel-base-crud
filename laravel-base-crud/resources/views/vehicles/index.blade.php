@extends('layouts.app')

@section('title', 'auto-title')

@section('content')

    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Marca</th>
        <th scope="col">Modello</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Veicoli as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->marca }}</td>
        <td>{{ $item->modello }}</td>
        <td><a href="{{ route('vehicles.show', ['vehicle'=>$item->id]) }}">Dettagli</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>

@endsection