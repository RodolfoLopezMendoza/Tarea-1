@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <a href="{{ route('movies.create') }}">Create Movie</a>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }} ({{ $movie->category->name }})</li>
        @endforeach
    </ul>
@endsection
