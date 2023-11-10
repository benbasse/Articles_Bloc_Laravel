<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Categorie::all();
        return view("articles.article", compact("articles", "categories"));
    }

//---------------------------------------------------------------------------
    public function create()
    {
        $categories = Categorie::all();
        return view('articles.ajouter', compact('categories'));
    }

//-----------------------------------------------------------------------------
// JE dois recuperer id categorie 
// where idcategorie = id 
public function findArticles(Request $request, $idCategorie)
{
    $categories = Categorie::all();
    $articles = Article::where(
        'categorie_id' , '=', $idCategorie,
    )->get();
    return view("articles.article", compact("articles", "categories"));
}



//-----------------------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $article = new Article();
        $request->validate([
            "nomArticle"=> "required|string|max:100",
            "contenueArticle"=> "required|string|max:1000",
        ]);
        $article->nomArticle = $request->nomArticle;
        $article->contenueArticle = $request->contenueArticle;
        $article->categorie_id = $request->categorie_id;
        
        if($article->save())
        {
            return redirect('articles');
        }
        return back();
    }
//-----------------------------------------------------------------------------------------------
    public function show($id)
    {   
        $articles = Article::find($id);
        $categories = Categorie::where(
            'id', '=', $id
        );
        return view('articles.more', compact("articles", "categories"));
        
    }
//-----------------------------------------------------------------------
    public function edit()
    {
        return view("articles.modify");
    }
//-----------------------------------------------------------------------
    public function update(Request $request, Article $article)
    {
        return view('articles');
    }
//-----------------------------------------------------------------------

    public function destroy(Article $article)
    {
        //
    }

}


