<div>
    <h1>{{$article->title}}</h1>
    <article>{{$article->body}}</article>
    <form method="" action="{{route('$article.destroy', $article)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
</div>
