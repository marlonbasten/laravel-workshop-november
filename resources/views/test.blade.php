@extends('layouts.app')

@section('content')

    <h1>Hallo {{ $name }} aus {{ $city }}</h1>

    @if($age >= 18)
        <p>Du darfst auf diese Seite!</p>
    @else
        <p>Du darfst hier nicht hin!</p>
    @endif

    <ul>
        @foreach ($userList as $user)
            <li>{{ $user['name'] }} aus {{ $user['city'] }}</li>
        @endforeach
    </ul>

@endsection
