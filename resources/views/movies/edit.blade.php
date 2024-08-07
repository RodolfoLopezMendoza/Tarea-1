@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $movie->title }}">
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $movie->description }}</textarea>
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == $movie->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
