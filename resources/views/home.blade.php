@extends('layouts.app')

@section('title','Home')

@section('content')
<main>
    <h1>Home page<i class="fa-solid fa-home"></i></h1>
    <a href="{{ route('movies.index') }}">Movies</a>
</main>
@endsection