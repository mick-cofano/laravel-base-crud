@extends('base')

@section('title', 'Show')

@section('content')


      <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{$beer->cover}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$beer->title}}</h5>
          <p class="card-text">{{$beer->description}}</p>
          <a href="/beers" class="btn btn-primary">Edit</a>
        </div>
      </div>

@endsection
