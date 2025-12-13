<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');


// viaggi 
Route::get('/place',function(){
    $places =[
        ['id'=> '1', 'localita'=>'Austria', 'img'=>'/media/paesi/Austria.jpg', 'voto'=>'Ce qualcosa di più romantico di trascorre una vacanza di coppia in un romantico castello della bellissima Austria'],
        ['id'=> '2', 'localita'=>'Giordania', 'img'=>'/media/paesi/Giordania.jpg', 'voto'=>' Cosa vedere in Giordania in una settimana? Non è così semplice rispondere a questa domanda perché la giordania è un paese che ha così tante cose'],
        ['id'=> '3', 'localita'=>'Scozia', 'img'=>'/media/paesi/Scotland.jpg', 'voto'=>'Se ci si vuole immergere completamente nell atmosfera della vita scozzese non cè modo migliore che trascorrere qualche giorno su una delle sue numerose isole'],  
       
    ];
    return view('places.bestPlaces', ['places'=>$places]);
})->name('places-view');

Route::get('/place/detail/{id}', function($id){
      $places =[
        ['id'=> '1', 'localita'=>'Austria', 'img'=>'/media/paesi/Austria.jpg', 'voto'=>'Ce qualcosa di più romantico di trascorre una vacanza di coppia in un romantico castello della bellissima Austria'],
        ['id'=> '2', 'localita'=>'Giordania', 'img'=>'/media/paesi/Giordania.jpg', 'voto'=>' Cosa vedere in Giordania in una settimana? Non è così semplice rispondere a questa domanda perché la giordania è un paese che ha così tante cose'],
        ['id'=> '3', 'localita'=>'Scozia', 'img'=>'/media/paesi/Scotland.jpg', 'voto'=>'Se ci si vuole immergere completamente nell atmosfera della vita scozzese non cè modo migliore che trascorrere qualche giorno su una delle sue numerose isole'],  
       
    ];
   foreach ($places as $place) {
     if($id == $place['id']){
        return view('places.bestPlaces-detail', ['place'=> $place]);
     }
   }

})->name('place.detail');





// contatti 
Route::get('/contatti', function (){
    $bloggers = [
        ['name'=>'Federico', 'surname' =>'Rossi', 'subject'=>'Videomaker'],
        ['name'=>'Luana', 'surname' =>'Picetto', 'subject'=>'Blogger'],
       

    ];
    return view('ourContacts',['bloggers' =>$bloggers]);
    
})->name('ourContacts');

// contatti dettagli 
Route::get('/contatti/detail/{name}',function ($name){
      $bloggers = [
        ['name'=>'Federico', 'surname' =>'Rossi', 'subject'=>'Videomaker'],
        ['name'=>'Luana', 'surname' =>'Picetto', 'subject'=>'Blogger'],
       

    ];
    foreach ($bloggers as $bloggers) {
        if($name == $bloggers['name']){
            return view('our-contacts-detail',['bloggers' =>$bloggers]);
        }
    }
})->name('ourContactsDetail');

