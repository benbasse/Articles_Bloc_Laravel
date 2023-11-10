<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () 
{
    return view('welcome');
});


// Route::get('/categories', function () 
// {
//     return view('categories.categorie');
// });
//------------------------------------Controller---------------------------------------------------------------
Route::get('categories', [CategorieController::class,'index']);
// Route::get('/categories/ajouter', function () 
// {
//     return view('categories.ajouterCategorie');
// });
Route::get('/categories/ajouter', [CategorieController::class, 'create']);
Route::post('/categories/ajouter', [CategorieController::class,'store']);


//---------------------------------------ARTICLES----------------------------------------------
// Route::get('articles', function () 
// {
//     return view('articles.article');
// });

// Route::get('/articles/ajouter', function () 
// {
//     return view('articles.ajouter');
// });

Route::get('articles', [ArticleController::class,'index']);
Route::get('/articles/ajouter', [ArticleController::class,'create']);
Route::post('/articles/ajouter', [ArticleController::class,'store']);
Route::get('/articles/{id}', [ArticleController::class,'findArticles']);
//--------------------------------------------------------------------------------------------


// Route::get('/layout/nav', function () 
// {
//     return view('layout.nav');
// });

