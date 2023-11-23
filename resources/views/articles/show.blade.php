<div>
    <h1>{{$article->title}}</h1>
    <article>{{$article->body}}</article>
    <form method="POST" action="{{ route('articles.archive', $article) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Supprimer l'article">
    </form>
</div>
