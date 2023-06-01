@extends('layouts.app')

@section('content')
<div class="container">
    <h1>comic create</h1>
    <form action="{{route('admin.comics.store')}}" method="post">
        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text"
                                    class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Type the title here" required>
                                    <small id="helpId" class="form-text text-muted">Type title of the new item</small>
                                </div>
                            </div>
                            <div class="col-12">    
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea placeholder="Type the description" class="form-control" name="description" id="description" rows="5" ></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="thumb" class="form-label">Thumbnail</label>
                                    <input type="text"
                                        class="form-control" name="thumb" id="thumb" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Type the link for the thumbnail</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number"
                                        class="form-control" step="0.01" min="0" name="price" id="price" aria-describedby="helpId" placeholder="Type the price" required>
                                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="mb-3">
                                    <label for="series" class="form-label">Series</label>
                                    <input type="text"
                                        class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="Type the series">
                                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="mb-3">
                                    <label for="sale_date" class="form-label">Sale Date</label>
                                    <input type="date"
                                        class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Type the sale date">
                                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <input type="text"
                                        class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Type the type of the comic">
                                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex gap-3 py-2">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        {{-- @include('partials.features_bar') --}}
    </div>
@endsection