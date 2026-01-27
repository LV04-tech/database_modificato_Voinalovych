<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;


// home 
Route::get('/', [PublicController::class,'homepage'])->name('homepage');

// contatti // ContactController
Route::get('/contatti', [ContactController::class,'ourContacts'])->name('ourContacts');
Route::get('/contatti/detail/{name}',[ContactController::class,'ourContactsDetail'])->name('ourContactsDetail');

// viaggi //PublicController
Route::get('/place',[PublicController::class,'placesView'])->name('places-view');
Route::get('/place/detail/{id}', [PublicController::class,'placeDetail'])->name('place.detail');
//form
Route::get('/place/create', [PublicController::class, 'create'])->name('place.create')->middleware('auth');
Route::post('/place/store', [PublicController::class, 'store'])->name('place.store')->middleware('auth');

//blog          //ArticleController 
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');


Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}',[ArticleController::class, 'show'])->name('article.show');

//edit/update
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/update/{article}',[ArticleController::class, 'update'])->name('article.update');

// delete 
Route::DELETE('/article/delete/{article}', [ArticleController::class,'destroy'])->name('article.destroy');