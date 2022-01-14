@extends('layouts.default')
@section('title', 'Boolean\'s Blog')
@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
@endsection
@section('main_content')
<div class="container">
    
    <h1> {{ $post->title }} </h1>
    <p> {{ $post->content }}</p>

    <a class="btn btn-primary" href="{{ route("posts.edit", $post->id) }}">modifica</a>

</div>
@endsection