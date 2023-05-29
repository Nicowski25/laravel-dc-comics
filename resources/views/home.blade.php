@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h3>Welcome to DC Comics</h3>

    <ul>
        @foreach ($comics as $comic)    
            <li>{{ $comic['title'] }}</li>
        @endforeach
    </ul>

</div>

@endsection