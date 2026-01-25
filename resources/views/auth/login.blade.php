<x-layout>

{{-- header  --}}
<header>
  <div class="row vh-75 justify-content-center">
    <div class="col-12">
      <h1 class="text-center py-4 display-4 text-custom">
      Login
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
       action="{{route('login')}}"
       method="POST"
      >
      @csrf

          <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
       
        <button type="submit" class="btn btn-success">Login</button>
      </form>
      
    </div>
  </div>
</div>



</x-layout>