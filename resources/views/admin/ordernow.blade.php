@extends('admin.master')
@section('content')

<table class="table table-stripped">
<tbody>
<tr>
        <td>email</td>
        <td>{{$admin->email}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{$admin->name}}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>{{$total}} Rupees</td>
    </tr>
    <tr>
    <td>Tax</td>
    <td>0 Rupess</td>
    </tr>
    <tr>
        <td>Delivery</td>
        <td>100</td>
    </tr>
    <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
    </tr>
    <tr>
        <td>city</td>
        <td>{{$admin->city}}</td>
    </tr>
    
</tbody>
</table>
<form action="/adminpanel/orderplace" method="post">
    @csrf
<div class="form-group">
    <textarea name="address" placeholder="plz enter your landmark" class="form-control"></textarea>
</div>
        
    
    <div class="form-group" >
        <p><input type="radio" value="cash" name="payment"><span>Online payment</span>
        <input type="radio" value="cash" name="payment"><span>EMI payment</span>
        <input type="radio" value="cash" name="payment"><span>card payment</span>
    </p>

    </div>
    <button type="submit" class="btn btn-success" name="">Order Now</button>
</form>
 
@endsection 