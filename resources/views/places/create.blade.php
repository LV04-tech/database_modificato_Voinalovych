<x-layout>
  
   {{-- header  --}}
  <div class="container-fluid bg-secondary ">
    <div class="row justify-content-center text-center text-white">
      <h2 class="my-5 subject">Inserisci il tuo luogo preferito</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-4 text-white text-uppercase">

      {{-- fine header  --}}

        {{-- messaggio di conferma --}}

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    {{-- Validation errors   --}}
 {{-- snippet per validare gli erorri --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        {{-- form  --}}
        <form 
         class="rounded-4 shadow bg_secondary-subtle p-3"
          method="POST" 
          action="{{route('place.submit')}}"
          enctype="multipart/form-data">
          
          @csrf
          <div class="mb-3">
            <label for="location" class="form-label">Luogo</label>
            <input type="text" name="location" value="{{old('location')}}" class="form-control" id="location" aria-describedby="placeHelp">  
          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" name="year" value="{{old('year')}}" class="form-control" id="year" aria-describedby="yearHelp">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Inserisci immagine</label>
            <input name="img" type="file" class="form-control me-3" id="img">
          </div>
          
          
          <button type="submit" class="btn btn-success">Inserisci la tua esperienza</button>
        </form>
        
      </div>
    </div>
  </div>
  
  
  
  
</x-layout>