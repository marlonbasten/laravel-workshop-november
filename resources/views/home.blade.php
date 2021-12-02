@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    @foreach($hospitals as $hospital)
                        <li>
                            {{ $hospital->name }}
                            @if ($hospital->locations)
                                <ul>
                                    @foreach($hospital->locations as $location)
                                        <li>{{ $location->street }}, {{ $location->city }}</li>
                                        @if ($location->facilities)
                                            <ul>
                                                @foreach($location->facilities as $facility)
                                                    <li>{{ $facility->name }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
