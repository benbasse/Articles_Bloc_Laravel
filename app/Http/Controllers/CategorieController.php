<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController  extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $articles = Article::where("id", "categorie_id");
        return view('categories.categorie', compact('categories', 'articles'));
    }

//---------------------------------------------------------------------------------------
    public function create()
    {

        $categories = Categorie::all();
        return view('categories.ajouterCategorie', compact('categories'));
    }

//---------------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $request->validate([
            'nomCategorie'=> 'required|string|max:20',
        ]);

        $categorie = new Categorie();
        $categorie->nomCategorie = $request->nomCategorie;
        $categorie->save();
        
        if($categorie->save())
        {
            return redirect('categories');
        }
        return back();
        
    }
//-----------------------------------------------------------------------------------------




//-----------------------------------------------------------------------------------------

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
