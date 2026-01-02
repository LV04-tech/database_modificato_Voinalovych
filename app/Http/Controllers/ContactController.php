<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
   public function ourContacts(){
    $bloggers = [
        ['name'=>'Federico', 'surname' =>'Rossi', 'subject'=>'Videomaker'],
        ['name'=>'Luana', 'surname' =>'Picetto', 'subject'=>'Blogger'],
       

    ];
    return view('ourContacts',['bloggers' =>$bloggers]);
    
   }

  public function ourContactsDetail($name){
      $bloggers = [
        ['name'=>'Federico', 'surname' =>'Rossi', 'subject'=>'Videomaker'],
        ['name'=>'Luana', 'surname' =>'Picetto', 'subject'=>'Blogger'],
       

    ];
    foreach ($bloggers as $bloggers) {
        if($name == $bloggers['name']){
            return view('our-contacts-detail',['bloggers' =>$bloggers]);
        }
    }
  }
}
