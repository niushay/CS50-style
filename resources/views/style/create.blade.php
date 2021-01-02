@extends('layout.layout')
@section('content')

    <form action="{{route('style.store')}}" method="post" style="display: inline-block;width: auto; margin-top: 4rem" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="title" placeholder="Title" type="text">
        </div>
        <div class="form-group">
            <textarea autocomplete="off" autofocus class="form-control" name="description" placeholder="Description"></textarea>
        </div>
        <div class="position-relative form-group">
            <select class="form-control" id="category_id" name="category">
                <option value="">Category</option>
                @foreach(\App\Category::orderby('id','asc')->get() as $category)
                    <option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="style_image" placeholder="Image" type="file">
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>

@endsection
