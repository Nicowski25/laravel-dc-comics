@extends('layouts.app')


@section('content')
<div class="container">

    @if (session('message'))
    <div class="alert alert-primary" role="alert">
        <strong>{{session('message')}}</strong>
    </div>

    @endif

    <h1>Comics home</h1>


    <a class="btn btn-primary" href="{{route('admin.comics.create')}}" role="button">Create</a>

    <div class="table-responsive">
        <table class="table table-striped table-secondary align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th>Artists</th>
                    <th>Writers</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                
                <tr class="table-primary">
                    <td scope="row">
                        <a href="{{route('admin.comics.show', $comic->id)}}" title="View" class="text-decoration-none">
                            {{$comic->id}}</td>
                        </a>
                    <td><img height="100" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->artists}}</td>
                    <td>

                        <a class="btn btn-primary" href="{{route('admin.comics.show', $comic->id )}}" role="button">View</a>
                        <a class="btn btn-secondary" href="{{route('admin.comics.edit', $comic->id )}}" role="button">Edit</a>

                        <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>

                       
              

                </tr>
                
                @empty
                <tr scope="row">
                    <td>No records in the db yet.</td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>



</div>

@endsection