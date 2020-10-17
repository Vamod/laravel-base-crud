@extends('layouts.app')
@section('titolo', 'home')
@section('content')
    @foreach ($data as $movie)
        <div class="container mt-2">
            <ul class="list-group list-unstyled">
                <a href="{{ route('movies.show', $movie->id) }}"><li class="list-group-item active font-weight-bold lead text-decoration-none">{{ $movie->titolo }}</li></a>
                <li class="list-group-item">Regista: <strong>{{ $movie->regista }}</strong></li>
                <li class="list-group-item">Anno: <strong>{{ $movie->anno }}</strong></li>
                <li>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Destroy</button>
                    </form>
                </li>
            </ul>
        </div>
    @endforeach
@endsection
