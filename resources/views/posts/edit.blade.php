@extends('layouts.default')
@section('title', 'modifica del post')
@section('page_header')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">modifca del post</h1>
            </div>
        </div>
    </header>
@endsection
@section('main_content')
    <h2>Nuovo Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="my-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $post->subtitle }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="5" value="{{ $post->content }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="coverImg" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="coverImg" name="coverImg" value="{{ $post->coverImg }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $post->category }}">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>

    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>

@endsection
