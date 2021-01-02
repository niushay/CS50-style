@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($styles as $style)
                <div class="container col-md-3" style="height: 50%; margin-top: 3rem">
                    <img src="{{url($style->image)}}" alt="Notebook" style="width:100%;">
                    <div class="content">
                        <a href="#" style="color: white;"><h1>{{$style->title}}</h1></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
