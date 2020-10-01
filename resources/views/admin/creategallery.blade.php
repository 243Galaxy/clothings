@extends('layouts.layout')

@section('content')
    <form action="{{ url('/creategallery') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w3-row">
            <div class="w3-col l6 w3-margin">
                <input type="text" placeholder="Material Type" id="material" name="material" class="w3-input">
            </div>
            <div class="w3-col l5 w3-margin w3-right">
                <input type="text" id="style" placeholder="Style Name" name="style" class="w3-input">
            </div>
            <div class="w3-col l6 w3-margin">
                <input type="text" id="color" placeholder="Color" name="color" class="w3-input">
            </div>
            <div class="w3-col l5 w3-margin">
                <label for="profile" class="w3-text-indigo">Picture</label> <br>
                <small class="w3-text-red w3-left">Note: Picture should not be morethan 500kb</small>
                <input type="file" id="image2" name="image2" class="w3-input">
            </div>
            <div class="w3-col l6 w3-margin">
                <input type="text" name="price" placeholder="Price" id="price" class="w3-input">
            </div>
            <div class="w3-col l6">
                <button type="submit" class="w3-btn w3-margin-bottom w3-blue w3-round w3-right" type="button"> Upload <i
                        class="fa fa-check"></i></button>
            </div>
        </div>
    </form>
@endsection
