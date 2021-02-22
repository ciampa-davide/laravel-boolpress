{{-- grazie ai segnaposto non devo riscrivere il codice ma richiamo questi ultimi con @extends('nome del file con i segnaposti') --}}
@extends('layout.main')

@section('header')
    <h1>Tutti i post</h1>
@endsection

@section('main')
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Autore</td>
                <td>Commento</td>
                <td>Testo</td>
                <td>Immagine</td>
                <td>Data Creazione</td>
                <td>Data ultima modifica</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)

            <tr>
                <td>{{ $blog->id}}</td>
                <td>{{ $blog->name}}</td>
                <td>{{ $blog->comment}}</td>
                <td>{{ $blog->text}}</td>
                <td>{{ $blog->img_path}}</td>
                <td>{{ $blog->created_at}}</td>
                <td>{{ $blog->updated_at}}</td>
                <td><a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </a></td>
                <td></td>
                <td></td>
            </tr>
                
            @endforeach
        </tbody>   
    </table>

@endsection

@section('footer')
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Crea un nuovo post</a>
@endsection



