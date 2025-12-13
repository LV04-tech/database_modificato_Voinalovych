<x-layout>
  
  
 


   
    <div class="container-fluid  vh-100 ">
      <div class="row  justify-content-center">
        <div class="col-6 p-5">
          <h2 class="text-center display-4">I nostri Viaggi</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis sequi nobis, officia laudantium eveniet dicta, eum officiis nam, doloremque alias placeat nulla sunt. Veritatis vitae expedita, iste atque impedit commodi.</p>
        </div>
        <div class="row align-items-center justify-content-center text-center">
        <div class="col-6 col-md-4 ">
          <h5>{{$place['localita']}}</h5>
          <h6>{{$place['voto'] }}</h6>
         
        </div>
        <div class="row align-items-center justify-content-center text-center">
        <div class="col-8 col-md-4">
          <img src="{{$place['img']}}" class="figure-img img-fluid rounded" alt="varie viaggi">
        </div>
        </div>
      </div>
     </div>
      
     </div>
    </div>


  
  </x-layout>