@extends('layouts.layout')
@section('content')
    <div class="w3-container" style="margin-top:20px;margin-bottom: 20px;">
        <div class="w3-row w3-animate-zoom">
            <div class="w3-quarter w3-padding w3-center">
                &nbsp;
            </div>
            <div class="w3-half">
                <div class="w3-panel w3-red w3-margin w3-card-4" id="errmsg" style="display:none">

                </div>
                <div class="w3-panel w3-green w3-margin w3-card-4" id="sucmsg" style="display:none">

                </div>
                <h2 style="margin-top: 0" class="w3-center w3-tangerine"><b>Sign In</b></h2>
                <div class="w3-center"><i class="fa w3-circle w3-border w3-xxxlarge fa-lock" style="padding:20px;"></i>
                </div>
                <div class="w3-row w3-padding">
                    <div class="w3-round w3-padding">
                        <form action="{{ url('/signin') }}" class="w3-row w3-animate-zoom" method="post">
                            <div class="w3-section">
                                <label class="w3-text-theme w3-bold-max">Email</label>
                                <input class="w3-input" type="text" name="email" id="email">
                            </div>
                            <div class="w3-section">
                                <label class="w3-text-theme w3-bold-max">Password</label>
                                <input class="w3-input" type="password" name="password" id="password">
                            </div>
                            <div class="w3-row">
                                <button class="w3-btn w3-mobile w3-margin-bottom w3-theme-d5 w3-round w3-right"
                                        type="submit"><i class="fa fa-unlock-alt"></i> Sign In
                                </button>
                                <a href="{{ url('/resetpassword') }}"
                                   class="w3-mobile w3-margin-bottom bread w3-round w3-text-theme w3-left w3-large"
                                   style="text-decoration: none;"><b>Forgot Password? Reset</b></a>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
            <div class="w3-quarter w3-padding w3-center">
                &nbsp;
            </div>
        </div>
    </div>
@endsection
