<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $articles = Article::find(
            $id
        );
        $categories = Categorie::all();
        $comments = Comment::where(
            'article_id', '=', $id,
        )->get();
        return view("comments.comment" , compact("articles","comments", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = Article::all();
        return view("comments.comment", compact("article"));
    }

    public function findComment($idArticle)
    {
        $artcilce = Article::find($idArticle);
        $comments = Comment::where(
            'article_id', '=', $idArticle,
        )->get();
        return view("comments.comment", compact("articles", "comments"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $article = Article::find($id);
        $comment = new Comment();   
        $request->validate([
            "contenueCommentaire"=>"required|string|max:255",
        ]);
        $comment->contenueCommentaire = $request->contenueCommentaire;
        $comment->article_id = $article->id;
        // dd($comment);
        if($comment->save())
        {
            return redirect("articles");
        }
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        // return view("comments.listComment");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
