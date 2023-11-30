<h1>Nouvel article</h1>

<form action="{{route('articles.store')}}" method="POST">
    @csrf
    @include('articles.fields')
    <button type="submit" value="Create">Créer</button>
    </form>
