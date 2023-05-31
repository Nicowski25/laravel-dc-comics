@extends('layout.app')


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

            <tbody>
                @forelse ($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>
                        <img width="100" class="img-fluid" src="{{$comic->image}}" alt="">
                    </td>
                    <td>{{$comic->name}}</td>
                    <td>

                        <a class="btn btn-primary" href="{{route('admin.comics.show', $comic->id )}}" role="button">View</a>
                        <a class="btn btn-secondary" href="{{route('admin.comics.edit', $comic->id )}}" role="button">Edit</a>

                        /* Attenzione manca modale */
                        <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>

                </tr>

                @empty
                <tr class="">
                    <td>No results</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>



</div>

@endsection