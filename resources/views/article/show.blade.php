<x-layout>
  
  
  
  {{-- header --}}
  <header class="bg-article">
    <div class="container h-100">
      <div class="row justify-content-center alighn-content-center">
        <div class="col-6 p-5">
          <h2 class="text-center display-4 subject">{{$article->title}}</h2>
        </div>
      </div>
    </header>
  {{--fine header --}}
    
    {{-- card  --}}
    <div class="container-fluid bg-article">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-4 my-5 text-white text-center ">
           <div style="width: 18rem;">
              <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagini casuali">
              <div">
                <h5>{{$article->title}}</h5>
                <p> {{$article->subtitle}}</p>
                <p> {{$article->body}}</p>
                </div>
             </div>
           </div>
        </div>
    </div>
    </div>
  </div>
  {{-- fine card  --}}
    
</x-layout>
