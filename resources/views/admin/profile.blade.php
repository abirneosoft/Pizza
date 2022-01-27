@php 
 $sid=session('sid');
@endphp 
@extends('admin.master')
@section('content')

<section class="container-fluid">
<form action="/adminpanel/updateadmin" method="post">
  @csrf()
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$admin->email}}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"value="{{$admin->name}}" name="name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$admin->age}}" name="age">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">city</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$admin->city}}" name="city">
  </div>
  <input type="hidden" value="{{$admin->email}}" name="pro_email"/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section> 


@endsection 