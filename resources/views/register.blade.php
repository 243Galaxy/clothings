@extends('layouts.layout')

@section('content')
<div class="w3-row">
    <div class="w3-col l2">&nbsp;</div>
    <div class="w3-col l8">
        <form action="{{ url('/register') }}" class="w3-row w3-animate-zoom" method="post">
            <div class="formsteps animated slideInLeft" id="step1">
            </div>
            <div class="formsteps animated slideInRight " id="step2">
                <div class="w3-section">
                    <div class="w3-xlarge w3-bold-max w3-text-theme">Fullname</div>
                </div>
                <div class="w3-section">
                    <input placeholder="Full Name" class="w3-input w3-round" type="text" name="fullname">
                </div>
            </div>
            <div class="formsteps animated slideInRight " id="step3">
                <div class="w3-section">
                    <div class="w3-xlarge w3-bold-max w3-text-theme">Contact</div>
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
            <div class="formsteps animated slideInRight " id="step4">
                <div class="w3-section">
                    <div class="w3-xlarge w3-bold-max w3-text-theme">Password.</div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l6 m6" style="padding-right: 4px">
                        <input placeholder="Secret password" class="w3-input w3-round" type="password" name="password">
                    </div>
                    <div class="w3-col l6 m6" style="padding-left: 4px">
                        <input placeholder="Confirm secret password" class="w3-input w3-round" type="password" name="cpassword">
                    </div>
                </div>
                <div class="w3-row w3-margin-top">
                    <button type="submit" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Register <i class="fa fa-check"></i></button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
    <div class="w3-col l2">&nbsp;</div>
</div>
@endsection