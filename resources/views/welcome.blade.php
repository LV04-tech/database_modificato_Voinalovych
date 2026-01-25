<x-layout>
  
<div class="container-fluid vh-100 bg-background">
  @if(session()->has('emailSent'))
    <div class="alert alert-success">
      {{session ('emailSent')}}
    </div>
  @endif
  @if(session()->has('emailError'))
    <div class="alert alert-danger">
      {{session ('emailError')}}
    </div>
  @endif
 
  <x-display-message/>
  
  <div class="row vh-75 justify-content-center align-items-center">
    <div class="col-12">
      <h1 class="text-center py-4 display-4 text-custom">
         Viaggia con Noi
      </h1>
    </div>
  </div>
</div>
  


  </x-layout>