@extends('layouts.layout')
@section('content')
    <div class="w3-row w3-blue w3-padding w3-center">
        <a class="w3-button w3-round w3-hover-light-blue w3-white" href="{{ url('signin') }}"><i
                class="fa fa-sign-in-alt"></i> Sign In</a>
        <a href="{{ url('/gallery')}}" class="w3-btn w3-hover-light-blue w3-round w3-white"><i class="fa fa-image"></i>
            Gallery</a>
        <a href="{{ url('/register')}}" class="w3-btn w3-hover-light-blue w3-round w3-white"><i class="fa fa-edit"></i>
            Register</a>
        <a href="{{ url('/order')}}" class="w3-btn w3-round w3-white w3-hover-light-blue"><i
                class="fa fa-shopping-bag"></i> Make an Order</a>
    </div>
@endsection
