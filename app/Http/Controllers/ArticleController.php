<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


use function Laravel\Prompts\search;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $articles = request()->has('archived') ? Article::archived() : Article::unarchived();
        if ($request->has('search')){
            $articles->where('body', 'like', '%' . $request->get('search') . '%');
        }
        return view('articles.index', ['articles' => $articles->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('articles.show', $article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->archive();
        return redirect()->route('articles.index');
    }
}
