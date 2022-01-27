<!DOCTYPE html>
<html>
    <head>
        <title> Regis Here </title>
        @include('admin.includes.head')
        <style>
        
      
        .body{
       background-image:url('/uploads/image/pizza-6.jpg');
      
       background-attachment:fixed;
       height:500px;
       width:100%;
     }
     </style>
    </head>
    <body class="body">
         <main>
         <section>
    <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5 ">
          <div class="card-body p-4 p-sm-5 bg-light text-primary">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registration</h5>
            <form method="post" action="{{url('/adminpanel/postregister')}}" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
      <label for="">Email</label>
     <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
      
        @if($errors->has('email'))
        <label class="alert alert-danger" >{{$errors->first('email')}}</label>
        @endif
    </div>
  
    <div class="form-group">
      <label for="">Password</label>
     <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your password">
      
        @if($errors->has('password'))
        <label class="alert alert-danger" >{{$errors->first('password')}}</label>
        @endif
    </div>

    
    
    <div class="form-group">
      <label for="">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your name" name="name">
         @if($errors->has('name'))
        <label class="alert alert-danger" >{{$errors->first('name')}}</label>
        @endif
    </div>
    
    <div class="form-group">
      <label for="">Age</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your age" name="age">
         @if($errors->has('age'))
        <label class="alert alert-danger" >{{$errors->first('age')}}</label>
        @endif
    </div>

    <div class="form-group">
      <label for="">city</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your city" name="city">
         @if($errors->has('city'))
        <label class="alert alert-danger" >{{$errors->first('city')}}</label>
        @endif
    </div>
    
   
    <button type="submit" class="btn btn-success" name="submit">submit</button>
    <a href="/adminpanel" class="text-dark">Existing users?</a>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
    

    </section>
 
         
         </main>
    @include('admin.includes.foot');
    </body>
</html>