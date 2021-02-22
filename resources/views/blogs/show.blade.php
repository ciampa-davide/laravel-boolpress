@extends('layout.main')

@section('header')

    <h1>Dettaglio Post</h1>
    
@endsection

@section('main')
    
    <table class="table table-striped table-bordered">

        @foreach ($blog->getAttributes() as $key => $value)

            <tr>
                <td>{{ $key }}</td>
            </tr>
            <tr>
                <td>{{ $value }}</td>
            </tr>
            
        @endforeach

    </table>

@endsection

@section('footer')
    
    <div class="text-right">

        <a href=" {{route('blogs.index')}} " class="btn btn-primary">Elenco post</a>

    </div>

@endsection