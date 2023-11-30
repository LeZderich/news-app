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
