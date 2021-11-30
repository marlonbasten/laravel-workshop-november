@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <hr>

    <h3>Kommentare</h3>

    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="content"></textarea>
        <br>
        <input type="submit" value="Kommentieren" class="btn btn-success">
    </form>

    <ul>
        @forelse ($post->comments as $comment)
            <li>{{ $comment->content }}</li>
        @empty
            <li>Keine Kommentare...</li>
        @endif
    </ul>

    <hr>

    <h3>Kategorien</h3>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="text" name="name">
        <br>
        <input type="submit" value="Hinzufügen" class="btn btn-success">
    </form>

    <ul>
        @foreach ($post->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection
