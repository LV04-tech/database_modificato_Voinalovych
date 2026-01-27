<x-layout>
  
   {{-- header  --}}
  <div class="container-fluid  bg-secondary ">
    <div class="row justify-content-center text-center text-white">
      <h2 class="my-5 subject">Modifica articolo {{$article->title}}!</h2>
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
         class="rounded-4 shadow bg_secondary-subtle p-3" method="POST" action="{{route('article.update',compact('article'))}}">
          
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="title" class="form-label">Titolo articolo</label>
            <input type="text" name="title" value="{{$article->title}}" class="form-control" id="title">  
          </div>
          <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitolo dell'articolo</label>
            <input type="text" name="subtitle" value="{{$article->subtitle}}" class="form-control" id="subtitle">
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
          </div>

           <div class="mb-3">
            <label for="img" class="form-label">Inserisci immagine</label>
            <input name="img" type="file" value="{{$article->img}}" class="form-control me-3" id="img">
          </div>
          
          <button type="submit" class="btn btn-success">Modifica articolo</button>
        </form>
        
      </div>
    </div>
  </div>
  
</x-layout>