
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
            <a class="nav-link" href="{{route('ourContacts')}}">Contacts</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('place.create')}}">Form</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  {{-- fine navbar  --}}