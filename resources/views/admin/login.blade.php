<!DOCTYPE html>
<html>
    <head>
        <title> Login Here </title>
        @include('admin.includes.head')
     <style>
     .body{
       background-image:url('/uploads/image/pizza-5.jpg');

       height:100vh;
       width:100vw;
     }
     </style>
    </head>
    <body class="body">
         <main >
             <!-- <header class="jumbotron">
                 <h1 class="text-center">Welcome </h1>
             </header> -->
             <section>
    <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5 ">
          <div class="card-body p-4 p-sm-5 bg-light">
            @if(Session::has('errMsg'))
            <div class="alert alert-danger">
              {{Session::get('errMsg')}}
            </div>
            @endif
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form method="post" action="{{url('/adminpanel/postlogin')}}" enctype="multipart/form-data">
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

    
    <button type="submit" class="btn btn-dark" name="submit">login</button>
    <a href="/adminpanel/register" class="text-dark">New users?</a>
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