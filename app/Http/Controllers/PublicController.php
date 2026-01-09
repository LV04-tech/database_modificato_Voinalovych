<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Travel;
use Illuminate\Http\Request;


class PublicController extends Controller
{
  
  public function homepage() 
  {
    return view('welcome');
  }
  
  public function placesView()
  {
    // $places =[
    //   ['id'=> '1', 'localita'=>'Austria', 'img'=>'/media/paesi/Austria.jpg', 'voto'=>'Ce qualcosa di più romantico di trascorre una vacanza di coppia in un romantico castello della bellissima Austria'],
    //   ['id'=> '2', 'localita'=>'Giordania', 'img'=>'/media/paesi/Giordania.jpg', 'voto'=>' Cosa vedere in Giordania in una settimana? Non è così semplice rispondere a questa domanda perché la giordania è un paese che ha così tante cose'],
    //   ['id'=> '3', 'localita'=>'Scozia', 'img'=>'/media/paesi/Scotland.jpg', 'voto'=>'Se ci si vuole immergere completamente nell atmosfera della vita scozzese non cè modo migliore che trascorrere qualche giorno su una delle sue numerose isole'],  
      
    // ];
    $places = Place::all();
    return view('places.bestPlaces',['places'=>$places]);
  }
  
  public function placeDetail($id)
  {
    // $places =[
    //   ['id'=> '1', 'localita'=>'Austria', 'img'=>'/media/paesi/Austria.jpg', 'voto'=>'Ce qualcosa di più romantico di trascorre una vacanza di coppia in un romantico castello della bellissima Austria'],
    //   ['id'=> '2', 'localita'=>'Giordania', 'img'=>'/media/paesi/Giordania.jpg', 'voto'=>' Cosa vedere in Giordania in una settimana? Non è così semplice rispondere a questa domanda perché la giordania è un paese che ha così tante cose'],
    //   ['id'=> '3', 'localita'=>'Scozia', 'img'=>'/media/paesi/Scotland.jpg', 'voto'=>'Se ci si vuole immergere completamente nell atmosfera della vita scozzese non cè modo migliore che trascorrere qualche giorno su una delle sue numerose isole'],  
      
    // ];
     $places= Place::all();

    // foreach ($places as $place) {
    //   if($id == $place['id']){
    //     return view('places.bestPlaces-detail', ['place'=> $places]);
    //   }
    // }
    
  }
  
  public function create()
  {
    return view('places.create');
  }
  
  public function store(Request $request)
  {
    $places = Place::create([
      'location'=> $request->location,
      'year'=> $request->year,
      'description'=> $request->description,
    ]);
    
   

    return redirect()->route('homepage')->with('successMessage','Hai correttamente inserito il tuo messaggio');
  }
  
}

