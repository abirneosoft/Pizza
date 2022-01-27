@extends('admin.master')
@section('content')


<section class="container">
        <h1>Menu</h1>
        <div class='row'>
        
        @foreach($menu as $val)
            
             <div class='col-sm-4'>
             <div class="card" style="width: 18rem;">
                <img src="{{url('uploads/'.$val->image)}}" class="card-img-top" alt="..." height="200" width="50">
                <div class="card-body">
                   
                    <h5 class="card-title">{{$val->name}}</h5>
                    <p class="card-text">
                     <h6 class="card-title">Price {{$val->price}}/-</h6>
                    
                   
                    </p>
                    <form action="/adminpanel/dashboard/add_to_cart" method="post">
                        @csrf
                        <input type="hidden" name="cat_id" value="{{$val->id}}" >
                     <input type="submit" class="btn btn-info" value="add to cart"/>
                    </form>
                    
                </div>
                </div>
             </div>
        
           @endforeach
        </div>
    </section>
@stop