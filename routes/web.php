<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;



Route::get('/', [PublicController::class,'homepage'])->name('homepage');


// viaggi 
Route::get('/place',[PublicController::class,'placesView'])->name('places-view');

Route::get('/place/detail/{id}', [PublicController::class,'placeDetail'])->name('place.detail');

// contatti 
Route::get('/contatti', [ContactController::class,'ourContacts'])->name('ourContacts');

// contatti dettagli 
Route::get('/contatti/detail/{name}',[ContactController::class,'ourContactsDetail'])->name('ourContactsDetail');
//form
Route::get('/place/create', [PublicController::class, 'create'])->name('place.create');
Route::post('/place/submit', [PublicController::class, 'store'])->name('place.submit');