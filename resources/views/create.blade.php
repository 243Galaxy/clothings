@extends('layouts.layout')

@section('content')
<style type="text/css">
    .formsteps{
        display: none;
    }
</style>
<div class="w3-row">
    <div class="w3-col l2">
        &nbsp;
    </div>
    <div class="w3-col l8">
        <form action="{{ url('/order') }}" class="w3-row w3-animate-zoom" method="post" enctype="multipart/form-data">
            @csrf
            <div class="formsteps animated slideInRight " id="step1">
                <div class="w3-section">
                    <div class="w3-xxlarge w3-bold-max w3-text-blue">Step 1: </div>
                    <div class="w3-xlarge w3-bold-max w3-text-blue">Your Fullname</div>
                </div>
                <div class="w3-section">
                    <input placeholder="Full Name" class="w3-input w3-round" type="text" name="name">
                </div>
                <div class="w3-row">
                    <button onclick="nextStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Next <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="formsteps animated slideInRight " id="step2">
                <div class="w3-section">
                    <div class="w3-xxlarge w3-bold-max w3-text-blue">Step 2: </div>
                    <div class="w3-xlarge w3-bold-max w3-text-blue">Contact Information</div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 m6" style="padding-right: 4px">
                        <input placeholder="Email Address" class="w3-input w3-round" type="email" name="email">
                    </div>
                    <div class="w3-col l6 m6" style="padding-left: 4px">
                        <input placeholder="Phone Number" class="w3-input w3-round" type="tel" name="phone">
                    </div>
                </div>
                <div class="w3-row w3-margin-top">
                    <button onclick="prevStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-left" type="button"><i class="fa fa-arrow-left"></i> Prev </button>
                    <button onclick="nextStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Next <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="formsteps animated slideInRight " id="step3">
                <div class="w3-section">
                    <div class="w3-xxlarge w3-bold-max w3-text-blue">Step 3: </div>
                    <div class="w3-xlarge w3-bold-max w3-text-blue">Clothing Detail</div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 m6" style="padding-right: 4px">
                        <input placeholder="Material" class="w3-input w3-round" type="text" name="material">
                    </div>
                    <div class="w3-col l6 m6" style="padding-left: 4px">
                        <input placeholder="Color" class="w3-input w3-round" type="text" name="color">
                    </div>
                </div>
                <div class="w3-row w3-margin-top">
                    <button onclick="prevStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-left" type="button"><i class="fa fa-arrow-left"></i> Prev </button>
                    <button onclick="nextStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Next <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="formsteps animated slideInRight " id="step4">
                <div class="w3-section">
                    <div class="w3-xxlarge w3-bold-max w3-text-blue">Step 4: </div>
                    <div class="w3-xlarge w3-bold-max w3-text-blue">Gender & Address</div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 m6" style="padding-right: 4px">
                        <input placeholder="Gender" class="w3-input w3-round" type="text" name="gender">
                    </div>
                    <div class="w3-col l6 m6" style="padding-left: 4px">
                        <input placeholder="Address" class="w3-input w3-round" type="text" name="address">
                    </div>
                </div>
                <div class="w3-row w3-margin-top">
                    <button onclick="prevStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-left" type="button"><i class="fa fa-arrow-left"></i> Prev </button>
                    <button onclick="nextStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Next <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="formsteps animated slideInRight " id="step5">
                <div class="w3-section">
                    <div class="w3-xxlarge w3-bold-max w3-text-blue">Step 5: </div>
                    <div class="w3-xlarge w3-bold-max w3-text-blue">Measurement & Image.</div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 m6" style="padding-right: 4px">
                        <input placeholder="Shoulder, Hand, Length, Trouser" class="w3-input w3-round" type=text name="size">
                    </div>
                    <div class="w3-col l6 m6" style="padding-left: 4px">
                         <input type="file" id="image" name="image" class="w3-input">
                        <small class="w3-text-blue w3-left">Image of the style (if available) Note: Image should not be morethan 500kb</small>
                    </div>
                </div>
                <div class="w3-row w3-margin-top">
                    <button onclick="prevStep()" class="w3-btn w3-margin-bottom w3-blue w3-round w3-left" type="button"><i class="fa fa-arrow-left"></i> Prev </button>
                    <button type="submit" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Submit <i class="fa fa-check"></i></button>
                </div>
            </div>
            </form>
    </div>
    <div class="w3-col l2">&nbsp;</div>
</div>
    <script type="text/javascript">
        var step = 0;
        function nextStep(){
            var curstep = step + 1;
            var x = document.getElementsByClassName('formsteps');
            for (var i = 0; i < x.length; i++) {
                x[i].style.display='none';
            }
            document.getElementById('step'+curstep).style.display='block';
            step = curstep;
        }
        nextStep();
    
        function prevStep(){
            var curstep = step - 1;
            var x = document.getElementsByClassName('formsteps');
            for (var i = 0; i < x.length; i++) {
                x[i].style.display='none';
            }
            document.getElementById('step'+curstep).style.display='block';
            step = curstep;
        }
    </script>
@endsection