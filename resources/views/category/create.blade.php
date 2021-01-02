@extends('layout.layout')
@section('content')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" style="display: inline-block;width: auto; margin-top: 4rem">
        @csrf
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="category" placeholder="Category" type="text">
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="category_image" placeholder="Category Image" type="file">
        </div>
        <div>
            <button class="btn btn-dark" type="submit">Add</button>
        </div>
    </form>

@endsection
