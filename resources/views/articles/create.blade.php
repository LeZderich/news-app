<h1>Nouvel article</h1>

<form action="{{route('articles.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">

    </div>
    <div>
        <label for="body">Contenu</label>
        <textarea name="body" id="body" cols="30" rows="10">{{old('body')}}</textarea>

    </div>
    <button type="submit" value="Create">Créer</button>
    </form>
