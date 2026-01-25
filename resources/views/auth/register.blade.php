<x-layout>

{{-- header  --}}
<header>
  <div class="row vh-75 justify-content-center">
    <div class="col-12">
      <h1 class="text-center py-4 display-4 text-custom">
        Registrati
      </h1>
    </div>
  </div>
</div>
</header>

{{-- validation errors  --}}
<x-display-errors/>

{{-- form  --}}
<div class="container">
  <div class="row mt-5 alighn-items-center justify-content-center ">
    <div class="col-12 col-md-8 d-flex justify-content-center">
      
      <form
      class="p-4 shadow rounded-4 bg-body-secondary"
       action="{{route('register')}}"
       method="POST"
      >
      @csrf
       

         <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name">
         </div>

          <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Password confirmation</label>
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
       
        <button type="submit" class="btn btn-success">Invia</button>
      </form>
      
    </div>
  </div>
</div>



</x-layout>