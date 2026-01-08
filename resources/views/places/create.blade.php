<x-layout>
  
  <div class="container-fluid bg-secondary vh-100">
    <div class="row justify-content-center text-center text-white">
      <h2 class="my-5 subject">Inserisci il tuo luogo preferito</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-4 text-white text-uppercase">
        
        <form method="post" action="{{route('place.submit')}}">
          @csrf
          <div class="mb-3">
            <label for="location" class="form-label">Luogo</label>
            <input type="text" name="location" class="form-control" id="location" aria-describedby="placeHelp">  
          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" name="year" class="form-control" id="year" aria-describedby="yearHelp">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          
         
          <button type="submit" class="btn btn-success">Inserisci la tua esperienza</button>
        </form>
        
      </div>
    </div>
  </div>
  
  
  
  
</x-layout>