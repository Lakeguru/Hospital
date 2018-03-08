@extends('layouts.master')

@section('content')

    @include('pages.navbar')
    <form action="/post" method="post">
        @csrf
        <hr>
        <div class="container">
            <h3>Create a new Post</h3>
            <div class="form-group col-sm-4">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>

            <div class="form-group col-sm-4">
                <input type="file" class="form-control" name="file" placeholder="Title">
            </div>

            <div class="form-group">
                <textarea type="text" class="form-control" name="content" placeholder="Here can be your nice text" rows="5"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-round btn-block col-sm-4" type="submit">Post</button>
            </div>


            <hr>
        </div>

    </form>

    @include('pages.footer')
    @endsection