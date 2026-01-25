
<x-layout>
  
   {{-- header  --}}
  <div class="container-fluid  bg-secondary ">
    <div class="row justify-content-center text-center text-white">
      <h2 class="my-5 subject">Inserisci l'articolo</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-4 text-white text-uppercase">

      {{-- fine header  --}}

    {{-- messaggio di conferma --}}
    <x-display-message/>

    {{-- Validation errors   --}}
    <x-display-errors/>

        {{-- form  --}}
        <form 
         class="rounded-4 shadow bg_secondary-subtle p-3"
          method="POST" 
          action="{{route('article.store')}}"
          enctype="multipart/form-data">
          
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Titolo articolo</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">  
          </div>
          <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitolo dell'articolo</label>
            <input type="text" name="subtitle" value="{{old('subtitle')}}" class="form-control" id="subtitle">
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Inserisci immagine</label>
            <input name="img" type="file" class="form-control me-3" id="img">
          </div>
          
          
          <button type="submit" class="btn btn-success">Crea articolo</button>
        </form>
        
      </div>
    </div>
  </div>
  
  
  
  
</x-layout>