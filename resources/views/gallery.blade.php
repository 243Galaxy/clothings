@extends('layouts.layout')
@section('content')
    <div class="w3-row w3-margin">
        @foreach ($gallery as $item)
            <div class="w3-col l4 w3-section">
                <img src="{{asset('uploads/avatars/'.$item->image2)}}" id="myImg" width="400px" height="450"
                     alt="Image"></b>
                <div class="w3-col l11 w3-card w3-padding">
                    <p><b class="w3-text-blue">Material</b>: {{ $item->material }} <span class="w3-margin-left"></span>
                    </p>
                    <a href="{{ $item->id }}" class="w3-btn
                      w3-blue w3-border w3-round">View</a>
                </div>
            </div>
    @endforeach
@endsection
