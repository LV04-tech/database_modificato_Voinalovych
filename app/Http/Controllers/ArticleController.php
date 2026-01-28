<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
//
$articles = Article::all();
return view('article.index', compact('articles')
//  ['articles' =>$articles] 
//versione 1 che puo essere sostituita da compact($articles)
);
}

/**
* Show the form for creating a new resource.
*/
public function create()
{
//
return view('article.create');
}

/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// 1 metodo salvataggio foto che passa l'utente altrimenti viene usata quella di defaul 
// if($request->file('img')){

//  Article::create([
//     $title = $request->title;
//     $subtitle = $request->subtitle;
//     $body = $request->body;
//     $img = $request->file('img')->store('img','public');
//   ]);

// else{
//     $title = $request->title;
//     $subtitle = $request->subtitle;
//     $body = $request->body;
//  
//   }
// } 
// 2 metodo piu pulito, dove salviamo l'oggetto in article 

     $article = Article::create([
       'title'=>$request->title,
       'subtitle'=>$request->subtitle,
       'body'=>$request->body,
       

    ]);

     if($request->file('img')){
        $article->img = $request->file('img')->store('img','public');
        $article->save();
      }  
      return redirect()->back()->with('message','articolo inserito con successo');
     }

/**
* Display the specified resource.
*/
public function show(Article $article)
{
//
// dd($article);
return view('article.show', compact('article'));
}

/**
* Show the form for editing the specified resource.
*/
public function edit(Article $article)
{
return view('article.edit', compact('article'));
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, Article $article)
{
$article->update($request->all());
return redirect()->back()->with('message', 'Articolo aggiornato con successo');
}

/**
* Remove the specified resource from storage.
*/
public function destroy(Article $article)
{
$article->delete();
return redirect(route('article.index'))->with('message','Articolo eliminato con successo');
}
}
