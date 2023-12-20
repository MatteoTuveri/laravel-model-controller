@extends('layouts.app')

@section('title', 'All Movies')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card mb-3 w-100">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->title }}</h5>
                      <p class="card-text">Voto:{{' '. $movie->vote }}</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
