@extends('layouts.app')

@section('content')
    @foreach ($post->categories as $category)
        <span class="badge badge-primary">{{ $category->name }}</span>
    @endforeach

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
@endsection
