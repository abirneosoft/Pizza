@extends('admin.master')
@section('content')

<table class="table table-hover">
                <thead>
                    <tr>
                        
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $s)
                    <tr>
                        
                        <td>{{$s->name}}</td>
                        <td>{{$s->price}}</td>
                        <td><img src="{{asset('/uploads/'.$s->image)}}" alt="" width="50px" height="50px" ></td>
                        
                        <td>
                           
                            <a href="/adminpanel/removecart/{{$s->carts_id}}" class="btn btn-danger btn-sm">Remove cart </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <a href="/adminpanel/ordernow" class="btn btn-success">check out</a>



@endsection 

