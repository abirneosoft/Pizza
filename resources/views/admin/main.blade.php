<!DOCTYPE html>
<html>
    <head>
        <title> Regis Here </title>
        @include('admin.includes.head')
    </head>
    <body>
         <main>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <img src="{{url('uploads/image/pizza-1.jpg')}}" height="100px" width="100px" class="rounded"/>
  <a class="navbar-brand" href="#"><img src="" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/adminpanel/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/adminpanel/register">signup</a>
      </li>
     
    </ul>
  </div>
</nav>
         <div class="jumbotron">
  <h1 class="display-4">Pizza Delivary!</h1>
  <p class="lead">Pizza delivery is a service in which a pizzeria or pizza chain delivers a pizza to a customer. An order is typically made either by telephone, or over the internet, in which the customer can request pizza type and size, and other items to be delivered with it, commonly including soft drinks. Pizzas may be delivered in cardboard pizza boxes or delivery bags, and deliveries are made with either an automobile, motorized scooter, or bicycle</p>
  <hr class="my-4">
  <p>we're performing free of delivary if you charges more than 350/-.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">sign in and order</a>
  </p>
</div>
         
         </main>
    @include('admin.includes.foot');
    </body>
</html>