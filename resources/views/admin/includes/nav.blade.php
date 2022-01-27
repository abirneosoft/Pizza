
<?php
use App\Http\Controllers\mycontroller;
$total=mycontroller::cartItem();

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
<a class="nav-link" href="#">Welcome : {{$sid[0]->email}}</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="navbar-brand" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/adminpanel/cartlist">Cart({{$total}})</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/adminpanel/edit/{{$sid[0]->email}}">Profile </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/adminpanel/profile/{{$sid[0]->email}}">edit Profile </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/adminpanel/logout">Logout</a>
      </li>
      
    </ul>
  </div>
</nav>