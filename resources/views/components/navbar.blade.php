
{{-- navbar  --}}
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}"><i class="fa-solid fa-earth-europe fa-3x" style="color: #0a0a0a;"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex align-items-center justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('places-view')}}">I Nostri Viaggi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourContacts')}}">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">I miei articoli</a>
        </li>
       
        
        {{-- Utente NON è autenticato --}}
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @endguest

        {{-- Utente autenticato  --}}
        @auth

         <li class="nav-item">
          <a class="nav-link" href="{{route('place.create')}}">Form</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Benvenut*{{Auth::user()->name}}</a>
        </li>
         <form class="nav-link" action="{{route('logout')}}" method="POST">
            <button type="submit">Logout</button>
            @csrf
          </form>
        @endauth  
      </ul>
    </div>
  </div>
</nav>
{{-- fine navbar  --}}