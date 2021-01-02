@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="container col-md-3" style="height: 50%; margin-top: 3rem">
                <img src="{{url($category->image)}}" alt="Notebook" style="width:100%;">
                <div class="content">
                    <a href="{{route('category.show',['category'=>$category])}}" style="color: white;"><h1>{{$category->title}}</h1></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
