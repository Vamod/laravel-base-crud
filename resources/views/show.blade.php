@extends('layouts.app')
@section('titolo', 'home')
@section('content')
        <div class="container mt-2">
            <ul class="list-group">
                <li class="list-group-item active font-weight-bold lead">{{ $movie->titolo }}</li>
                <li class="list-group-item">Regista: <strong>{{ $movie->regista }}</strong></li>
                <li class="list-group-item">Anno: <strong>{{ $movie->anno }}</strong></li>
                <li class="list-group-item">{{ $movie->trama }}</li>
                <li class="list-group-item"><a href="{{ route('movies.edit', $movie->id) }}">Edit</a></li>
            </ul>
        </div>
@endsection
