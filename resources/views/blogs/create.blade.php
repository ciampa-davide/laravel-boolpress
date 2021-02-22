@extends('layout.main')

@section('header')

    <h1>Crea il tuo post</h1>
    
@endsection



@section('main')
   
    <form action="{{ route('blogs.store') }}" method="POST">

        @method('POST')
        @csrf

        
             <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Autore">
            </div>
            <div class="form-group">
                <label for="comment"></label>
                <input type="text" class="form-control" id="comment" name="comment" aria-describedby="emailHelp" placeholder="Commento">
            </div>
            <div class="form-group">
                <label for="text"></label>
                <input type="text" class="form-control" id="text" name="text" aria-describedby="emailHelp" placeholder="Testo post">
            </div>
            <div class="form-group">
                <label for="img_path"></label>
                <input type="text" class="form-control" id="img_path" name="img_path" aria-describedby="emailHelp" placeholder="Immagine">
            </div>

        <button class="btn btn-success">SALVA</button>
        <a href=" {{route('blogs.index')}} " class="btn btn-primary">Elenco post</a>

    </form>

@endsection