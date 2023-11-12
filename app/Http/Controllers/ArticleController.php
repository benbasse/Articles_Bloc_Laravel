<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $articles = Article::find($id);
        $categories = Categorie::where(
            'id', '=', $id
        )->get();
        return view("articles.modify", compact("articles","categories"));
    }
//-----------------------------------------------------------------------
public function update(Request $request)
{
    $article = DB::table('articles')
            ->where('id', $request->id)
            ->update([
                'nomArticle' => $request->nomArticle,
                'contenueArticle'=> $request->contenueArticle,
            ]);
    return redirect('articles');

}
//-----------------------------------------------------------------------

    public function destroy(Article $article)
    {
        //
    }

}


