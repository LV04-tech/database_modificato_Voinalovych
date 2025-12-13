
<x-layout>
  
  
   {{-- header  --}}
  <header>
     <div class="container-fluid vh-100 bg-b">
       <div class="row justify-content-center align-items-center">
       <div class="col-6 p-5">
         <h2 class="text-center display-4 subject">Contatti</h2>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis sequi nobis, officia laudantium eveniet dicta, eum officiis nam, doloremque alias placeat nulla sunt. Veritatis vitae expedita, iste atque impedit commodi.</p>
        </div>


      {{-- card  --}}
        <section>
          <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center ">
               <div class="col-12 col-md-6 mb-2">
                 @foreach ($bloggers as $bloggers)
                 
                  <x-card
     
                     name="{{$bloggers['name']}}"
                     surname="{{$bloggers['surname']}}"
                     subject="{{$bloggers['subject']}}"
                    >
                  </x-card>
                 
                 @endforeach
               </div>
             </div>
           </div>
        </section>
      </div>
    </div>
  </header>
      {{-- fine header   --}}
</x-layout>