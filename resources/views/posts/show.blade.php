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

    {{-- <h1> {{ $post->title }} </h1>
    <p> {{ $post->content }}</p> --}}
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row ">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }} </h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{$post->created_at }} by {{$post->author }}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category }}</a>
                        {{-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> --}}
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{ $post->coverImg }} " alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        {{ $post->content }}
                    </section>
                </article>
                <!-- Comments section-->

            </div>

        </div>
    </div>


    <a class="btn btn-primary m-3" href="{{ route("posts.edit", $post->id) }}">modifica</a>


    <form action="{{route("posts.destroy", $post->id)}}" method="post" class="m-3">
        @csrf
        @method("DELETE")

        <button type="submit" class="btn btn-danger">Elimina</button>
    </form>




</div>
@endsection
