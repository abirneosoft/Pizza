@extends('admin.master')
@section('content')

<div class="col-sm-10">
<h2 class="text-dark">order has been placed successfully</h2>
<div class="container">
<div class="alert alert-success ">you will receive notification by email</div>
</div>
<h2 class="alert-dark text-light bg-dark">Go an order for some more</h2>
    <div class="trending-wrapper">
        <h4>My order</h4>
        <table>
            
         @foreach($order as $order)
         <tr>
                <td>order id</td>
                <td>{{rand(100,200)}}</td>

            </tr>
            <tr>
                <td>Name:</td>
                <td>{{$admin->name}}</td>

            </tr>
            <tr>
                <td>Address:</td>
                <td>{{$order->address}}</td>
            </tr>
            <tr>
                <td>Payment status:</td>
                <td>{{$order->payment_status}}</td>
            </tr>
            <tr>
                <td>Payment Method: </td>
                <td>{{$order->payment_method}}</td>
            </tr>
            
            @endforeach 
        </table>
       

    </div>
</div>

 
@endsection 