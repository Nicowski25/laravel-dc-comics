@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-3 mt-2 bg-dark">
        <div class="col ">

            <img src="{{$comic->thumb}}" class="img-fluid" alt="...">

        </div>

        <div class="col text-white">
            <h1>{{$comic->title}}</h1>
            <div> <strong>Price: </strong>{{$comic->price}}</div>
            <div> <strong>Availability: </strong>{{$comic->series}}</div>
            <div><strong>Description: </strong>
                <p>{{$comic->description}}</p>
            </div>
            <div> <strong>Sale Date: </strong>{{$comic->sale_date}}</div>
            <div> <strong>Type: </strong>{{$comic->type}}</div>
        </div>

    </div>
</div>

@endsection