@extends('layouts.default')
@section('title', 'Creazione nuovo post')
@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Creazione di un nuovo post</h1>
            <p class="lead mb-0">In questa pagina puoi creare un nuovo post per il tuo blog e diventare la nuova Chiara Ferragni!</p>
        </div>
    </div>
</header>
@endsection
@section('main_content')
<h2>Nuovo Post</h2>
<form action="{{route('posts.store')}}" method="POST" class="my-5">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="coverImg" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="coverImg" name="coverImg">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Crea</button>
    </div>

</form>
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);

</script>

@endsection
