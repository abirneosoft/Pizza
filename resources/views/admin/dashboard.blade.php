@php 
 $sid=session('sid');
@endphp 
@extends('admin.master')
@section('content')
  <h1> Welcome  {{$sid[0]->name}} </h1>
@endsection 