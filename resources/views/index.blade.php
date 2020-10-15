@extends('layouts.app')
@section('content')
    @foreach ($data as $movie)
        <div class="container mt-2">            
            <ul class="list-group">
                <li class="list-group-item active font-weight-bold">{{ $movie->titolo }}</li>
                <li class="list-group-item">{{ $movie->regista }}</li>
                <li class="list-group-item">{{ $movie->anno }}</li>
            </ul>
        </div>
    @endforeach
@endsection
