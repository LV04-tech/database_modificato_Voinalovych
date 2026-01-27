<x-layout>
  
  
  
  {{-- header --}}
  <header>
    <div class="container h-100">
      <div class="row justify-content-center alighn-content-center">
        <div class="col-6 p-5">
          
        </div>
      </div>
    </header>
    {{--fine header --}}
    
    
    <div class="container">
      <div class="row">
        <div class="card text-bg-dark">
          <img src="https://picsum.dev/200/100" class="card-img" alt="immagini casuali">
        </div>
        <div class="card text-center">
          <div class="card-header">
            <h5>{{$article->title}}</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$article->subtitle}}</h5>
            <p class="card-text">{{$article->body}}</p>
            <div class="d-flex alighn-items-center justify-content-center">
            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica articolo</a>

              <form action="{{route('article.destroy',compact('article'))}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"  data-bs-target="#modal{{$article->id}}">Elimina</button> 
                
                <div class="modal" tabindex="-1" id="modal{{$article->id}}" aria-labelledby="exmplaeModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">{{$article->title}}</h5>
                      </div>
                    <div class="modal-body">
                      <p>Stai eliminando questo articolo. Confermi?</p>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Elimina</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
          </div>
          
        </div>
        
        
      </x-layout>
      