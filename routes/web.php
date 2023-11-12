<?php

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategorieController;

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

//------------------------------------Controller---------------------------------------------------------------
Route::get('categories', [CategorieController::class,'index']);
Route::get('/categories/ajouter', [CategorieController::class, 'create']);
Route::post('/categories/ajouter', [CategorieController::class,'store']);
//---------------------------------------ARTICLES----------------------------------------------
Route::get('articles', [ArticleController::class,'index']);
Route::get('/articles/ajouter', [ArticleController::class,'create']);
Route::post('/articles/ajouter', [ArticleController::class,'store']);
Route::get('/articles/{id}', [ArticleController::class,'findArticles']);
Route::get('/articles/more/{id}', [ArticleController::class,'show']);
Route::get('articles/modify/{id}', [ArticleController::class,'edit']);
Route::post('/articles/modify/{id}', [ArticleController::class,'update']);

//---------------------------------------COMMENTS-----------------------------------------------------
Route::get('/comments/{id}', [CommentController::class,'index']);
Route::get('/comments/comment', [CommentController::class,'create']);
Route::get('comment/comment/{id}', [CommentController::class,'findComment']);
Route::post('/comments/{id}', [CommentController::class,'store']);
Route::get('/comment/listComment/{id}', [CommentController::class,'show']);

