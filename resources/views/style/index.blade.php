@extends('layout.layout')
@section('content')

    <div class="container mt-4">
        <div class="row">
            @foreach($styles as $style)
                <div class="card col-md-3 " style="width: 18rem;">
                    <img class="card-img-top" src="{{url($style->image)}}" alt="Card image cap" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{$style->title}}</h5>
                        <p class="card-text">{{$style->description}}</p>

                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{$styles->links()}}
        </div>
    </div>

@endsection

