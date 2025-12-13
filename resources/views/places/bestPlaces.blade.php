<x-layout>
  
  


   <header>
    <div class="container-fluid vh-100 bg-back">
      <div class="row justify-content-center">
        <div class="col-6 p-5">
          <h2 class="text-center display-4 subject">I nostri Viaggi</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis sequi nobis, officia laudantium eveniet dicta, eum officiis nam, doloremque alias placeat nulla sunt. Veritatis vitae expedita, iste atque impedit commodi.</p>
        </div>
      </div>
      
     <div class="row h-100 align-items-center px-3">
       @foreach ($places as $places)
          <div class="col-12 col-md-4 d-flex justify-content-center">
            <div class="photo" style="width: 18rem;">
               <img src="{{$places['img']}}" class="card-img-top photo" alt="posti visitati">
                <div class="card-body ">
                  <h5 class="card-title py-4"><i class="fa-solid fa-street-view"></i> {{$places['localita']}}</h5>
                   <p class="card-text text py-3"> {{$places['voto']}}</p>
                  
                   <div class="row px-5 py-4 d-flex align-items-center justify-content-center">
                     <a href="{{route('place.detail',['id'=> $places['id']])}}" class="btn">Piu dettagli</a>
                  </div>
                </div>
            </div>
          </div>
       @endforeach
     </div>
    </div>
  </header>


  
  
</x-layout>
