@extends('layouts.layout')
@section('content')
    <div class="w3-row">
        <div class="w3-col l5">
            <div class="w3-container w3-center w3-section">
                <img src="{{asset('uploads/avatars/'.$gallery->image2)}}" id="myImg" width="400px" height="450"
                     alt="Image"></b>
            </div>
        </div>
        <div class="w3-col l3">
            <h5><b class="w3-text-blue">Material:</b> <b>{{$gallery->material}}</b>
            </h5>
            <p><b class="w3-text-blue">Color:</b> <b>{{ $gallery->color }}</b></p>
            <p><b class="w3-text-blue">Style:</b><b> {{$gallery->style}}</b></p>
            <p><b class="w3-text-blue">Price: </b><b>&#8358;{{ $gallery->price }}</b></p>
            <div onclick="document.getElementById('id01').style.display='block'"
                 class="w3-btn w3-hover-green w3-button w3-border w3-round w3-blue"><i class="fa fa-pen"></i>Make An
                Order
            </div>
        </div>
    </div>
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-round">
            <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
                <form action="{{ url('/orderg') }}?pid={{$c}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="formsteps animated slideInRight " id="step1">
                        <div class="w3-section">
                            <div class="w3-large w3-bold-max w3-text-blue">Your Fullname</div>
                            <input type="hidden" name="galleries_id" class="w3-input w3-border w3-round" value="{{$c}}">
                        </div>
                        <div class="w3-section">
                            <input placeholder="Full Name" class="w3-input w3-round" type="text" name="name">
                        </div>
                    </div>
                    <div class="formsteps animated slideInRight " id="step2">
                        <div class="w3-section">
                            <div class="w3-large w3-bold-max w3-text-blue">Contact Information</div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l6 m6" style="padding-right: 4px">
                                <input placeholder="Email Address" class="w3-input w3-round" type="email" name="email">
                            </div>
                            <div class="w3-col l6 m6" style="padding-left: 4px">
                                <input placeholder="Phone Number" class="w3-input w3-round" type="tel" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="formsteps animated slideInRight " id="step3">
                        <div class="w3-section">
                            <div class="w3-large w3-bold-max w3-text-blue">Clothing Detail</div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l6 m6" style="padding-right: 4px">
                                <input placeholder="Material" class="w3-input w3-round" type="text" name="material">
                            </div>
                            <div class="w3-col l6 m6" style="padding-left: 4px">
                                <input placeholder="Color" class="w3-input w3-round" type="text" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="formsteps animated slideInRight " id="step4">
                        <div class="w3-section">
                            <div class="w3-large w3-bold-max w3-text-blue">Gender & Address</div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l6 m6" style="padding-right: 4px">
                                <input placeholder="Gender" class="w3-input w3-round" type="text" name="gender">
                            </div>
                            <div class="w3-col l6 m6" style="padding-left: 4px">
                                <input placeholder="Address" class="w3-input w3-round" type="text" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="formsteps animated slideInRight " id="step5">
                        <div class="w3-section">
                            <div class="w3-large w3-bold-max w3-text-blue">Measurement & Image.</div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l6 m6" style="padding-right: 4px">
                                <input placeholder="Shoulder, Hand, Length, Trouser" class="w3-input w3-round" type=text
                                       name="size">
                            </div>
                        </div>
                        <div class="w3-row w3-margin-top">
                            <button type="submit" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right"
                                    type="button"> Submit <i class="fa fa-check"></i></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
