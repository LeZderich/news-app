<h2>{{ $article->title }}</h2>
<article>
    {{ $article->body }}
</article>
<form method="POST" action="{{ route('articles.destroy', $article) }}">
    @csrf
    @method('DELETE')
    <input type="submit" value="Supprimer l'article">
</form>
<form method="POST" action="{{ route('articles.edit', $article) }}">
    @csrf
    @method('GET')
    <input type="submit" value="Modifier cet article">
</form>

<form method="POST" action="{{ route('articles.comments.store', $article) }}">
    @csrf
    <label>
        <input type="text" name="body" placeholder="Votre commentaire">
    </label>
    <input type="submit" value="Commenter">
</form>

<h3>Commentaires</h3>
@foreach($article->comments as $comment)
    <p>{{ $comment->body }}</p>
@endforeach
