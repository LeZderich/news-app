@extends('layout')

@section('content')
    <h1>Articles</h1>
    @foreach($articles as $article)
        <div>
            <h2><a href="{{route('articles.show', $article)}}">{{$article->title}}</a></h2>
        </div>
    @endforeach
@endsection
