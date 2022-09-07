@extends('layouts.main')

@section('header-content')


@endsection

@section('main-content')
<div class="jumbotron">
    <h2>current series</h2>
</div>

<div class="cards-container">
    <div class="container slide-box p-4">
        @foreach ($comics as $comic)
        <div class="box p-1 mt-3">
            <div>
                <img class="w-100" src="{{$comic -> image}}" alt="">
            </div>
            <h3>{{$comic -> title}}</h3>
        </div>
        @endforeach
    </div>
</div>
<div class="product-container">
    <div id="wrapper">
        <div>
            <div class="img-container">
                <img src="" alt="">
                <h3>

                </h3>
            </div>
        </div>
    </div>
</div>

@endsection