<div>
    <h1>Articles</h1>
    @foreach($articles as $article)
        <div>
            <h2>{{$article->title}}</h2>
            <p>{{$article->body}}</p>
        </div>
    @endforeach
</div>
