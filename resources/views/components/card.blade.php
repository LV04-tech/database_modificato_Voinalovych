{{-- sezione card  --}}
  


            <div class="card " style="width: 18rem;">
              <img src="https://picsum.photos/200" class="card-img-top" alt="immagini casuali">
             <div class="card-body">
                <h5 class="card-title">{{$name}} {{$surname}}</h5>
                 <p class="card-text">{{$subject}}</p>
                <a href="{{route('ourContactsDetail',['name'=>$name])}}" class="btn btn">Vai>></a>
             </div>
           </div>
         </div>
    
    