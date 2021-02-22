@extends('layout.main')

@section('header')

    <h1>Dettaglio Post</h1>

    <p>Post Status: <strong>{{ $blog->infoPost->post_status }}</strong></p>
    <p>Comment status: <strong>{{ $blog->infoPost->comment_status }}</strong> </p>
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

    <h2>Commenti</h2>
    <ul>
        @foreach ($blog->comments as $comment)
            <li>
                <h5>{{ $comment->author }}</h5>
                <p>{{ $comment->text }}</p>
            </li>
        @endforeach
    </ul>
@endsection

@section('footer')
    
    <div class="text-right">

        <a href=" {{route('blogs.index')}} " class="btn btn-primary">Elenco post</a>

    </div>

@endsection