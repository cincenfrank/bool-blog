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
    <div class="row row-cols-4 g-3">
        @foreach ($posts as $post)
        {{-- @dump($post) --}}
        <div class="col">
            <div class="card mb-4 h-100">
                @if ($post->coverImg)
                <a href=“#!“><img class="card-img-top" src="{{ $post->coverImg }}" alt=“post_image”/></a>
                @endif
                <div class=“card-body”>
                    {{-- <div class="small text-muted"></div> --}}
                    <h2 class="card-title h4">{{ $post->title }}</h2>
                    <p class=“card-text”>{{ $post->content }}</p>
                    <a class="btn btn-primary" href="{{ route("posts.show", $post->id) }}">Read more</a>
                </div>
            </div>  
        </div> 
        @endforeach
    </div>
</div>
@endsection
