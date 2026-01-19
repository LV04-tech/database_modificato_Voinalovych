{{-- sezione card  --}}
  

  <div class="photo" style="width: 15rem;">
         {{-- @dd($place) --}}
          <img src="{{Storage::url($place->img)}}" class="card-img-top photo" alt="posti visitati">
            
          <div class="card-body ">
            <h5 class="card-title py-4"><i class="fa-solid fa-street-view"></i> {{$place->location}}</h5>
            <p class="card-text text py-3"> {{$place->year}}</p>
            <p class="card-text text py-3"> {{$place->description}}</p>
            <div class="row px-5 py-4 d-flex align-items-center justify-content-center">
              <a href="" class="btn">Piu dettagli</a>
            </div>
          </div>
    
        