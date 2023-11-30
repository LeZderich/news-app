<h1>Modifier l'article</h1>

<form method="POST" action="{{ route('articles.update', $article) }}">
    @method('PUT')
    @csrf
    @include('articles.fields')
    <button type="submit" value="Modifier">Modifier</button>
</form>
