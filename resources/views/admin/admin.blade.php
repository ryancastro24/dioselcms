@extends('layout.app')

@section('contents')

<form action="{{route('registerDealear')}}" method="POST">

 @csrf
 
 

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="name@example.com">
  </div>
  

  <button type="submit" class="btn btn-primary w-full mt-5">Submit</button>
 
</form>

@endsection