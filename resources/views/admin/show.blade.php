@extends('layouts.layout')
@section('content')    
<div class="w3-row">
    <div class="w3-col l5">
        
        
        
        
        
        
        <div class="w3-container w3-center w3-section">
            <img src="{{asset('uploads/avatars/'.$clothing->image)}}" id="myImg" width="400px" height="450" alt="Image"></b>
        </div>
        </div>
        <div class="w3-col l3">
          <h3><p> <b>{{$clothing->name}}</b> </p></h3>
          <p> <b class="w3-text-blue">Gender: </b> <b>{{$clothing->gender}}</b> </p>
          <p> <b class="w3-text-blue">Address: </b> <b>{{$clothing->address}}</b> </p>
          <p> <b class="w3-text-blue">Phone Number: </b> <b>{{$clothing->phone}}</b> </p>
          <p> <b class="w3-text-blue">Email</b> <b>{{$clothing->email}}</b> </p>
          <p> <b class="w3-text-blue">Measurements: </b> <b>{{$clothing->size}}</b> </p>
          <p> <b class="w3-text-blue">Date of Order: </b> <b>{{$clothing->created_at}}</b> </p>
        <h5> <b class="w3-text-blue">Material:</b> <b>{{$clothing->material}}</b>
        </h5>
            <p> <b class="w3-text-blue">Color:</b> <b>{{ $clothing->color }}</b></p>
            
            
            
            
            

        </div>
</div>
@endsection