<x-layout>
  
  
  
  {{-- header --}}
  <header class="bg-article">
    <div class="container h-100">
      <div class="row justify-content-center alighn-content-center">
        <div class="col-6 p-5">
          <h2 class="text-center display-4 subject">I miei articoli</h2>
        </div>
      </div>
    </header>
  {{--fine header --}}
    
    {{-- card  --}}
    <div class="container-fluid bg-article">
      <div class="row">
        @foreach($articles as $article)
        <div class="col-12 col-md-4 my-5 d-flex alighn-items-center justify-content-center">
           <div class="photo" style="width: 15rem;">
              <img src="{{Storage::url($article->img)}}" class="card-img-top photo" alt="posti visitati">
              <div class="card-body ">
                <h5 class="card-title py-4">{{$article->title}}</h5>
                <p class="card-subtitle text py-3"> {{$article->subtitle}}</p>
                <p class="card-text text py-3"> {{$article->body}}</p>
                <a href="{{route('article.show', compact('article'))}}" class="btn">Dettaglio</a>
             </div>
           </div>
        </div>
         @endforeach
      </div>
    </div>

  {{-- fine card  --}}
    
</x-layout>
