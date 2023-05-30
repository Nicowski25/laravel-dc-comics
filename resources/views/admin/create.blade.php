@extends('layouts.app')

@section('content')
<div class="container">
    <h1>comic create</h1>
    /* Occhio alla rotta, qui ci va il nome della rota non l'uri */
    <form action="{{route('admin.comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Zelda" aria-describedby="nameHelper">
            <small id="nameHelper" class="text-muted">Type the comic name max: 200 characters</small>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="https://" aria-describedby="imageHelper">
            <small id="imageHelper" class="text-muted">Type the comic image max: 200 characters</small>
        </div>
        <div class="mb-3">
            <label for="platform" class="form-label">Platform</label>
            <input type="text" name="platform" id="platform" class="form-control" placeholder="Nintendo Switch" aria-describedby="platformHelper">
            <small id="platformHelper" class="text-muted">Type the comic platform max: 200 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="99.99" aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type the comic price max: 200 characters</small>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">release_date</label>
            <input type="date" name="release_date" id="release_date" class="form-control" placeholder="Zelda" aria-describedby="release_dateHelper">
            <small id="release_dateHelper" class="text-muted">Type the comic release_date max: 200 characters</small>
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="has_demo" name="has_demo">
            <label class="form-check-label" for="has_demo">
                Demo avalable
            </label>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Add Comic</button>
    </form>

</div>
@endsection