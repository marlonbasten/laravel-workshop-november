@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titel">
        <br>
        <textarea name="content" placeholder="Text"></textarea>
        <br>
        <input type="submit" value="Post senden">
    </form>
@endsection
