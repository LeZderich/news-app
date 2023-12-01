<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'body' => 'required|string',
        ]);
        if ($article->archived_at) {
            return redirect()->route('articles.show', $article);
        }
        $article->comments()->create([
            'body' => $request->input('body'),
        ]);
        return redirect()->route('articles.show', $article);
    }
}
