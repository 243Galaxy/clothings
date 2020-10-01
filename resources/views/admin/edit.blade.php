@extends('layouts.layout')

@section('content')
    <div class="w3-row">
        <div class="w3-col">
            <br>
            <h3>Edit Record</h3>
            <br>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ action('ClothingController@update', $clothing->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <div class="w3-row w3-section">
                    <div class="w3-col l4 w3-margin-left">
                        <label for="name">Name</label>
                        <div class="">
                            <input class="w3-input w3-border w3-round" value="{{ $clothing->name}}" id="name"
                                   name="name" type="text">
                        </div>
                    </div>
                    <div class="w3-col l4 w3-margin-left">
                        <label for="material">Select Material</label>
                        <select name="material" id="material" value="{{ $clothing->material}}"
                                class="w3-select w3-round w3-border">
                            <option value="">--Select Material--</option>
                            <option value="cotton">Cotton</option>
                            <option value="satin">Satin</option>
                            <option value="nylon">Nylon</option>
                            <option value="silk">Silk</option>
                        </select>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l4 w3-margin-left">
                        <label for="color">Select Color</label>
                        <select name="color" id="color" class="form-control" value="{{ $clothing->color}}">
                            <option value="">--Select Color--</option>
                            <option value="blue">Blue</option>
                            <option value="red">Red</option>
                            <option value="black">Black</option>
                            <option value="maroon">Maroon</option>
                        </select>
                    </div>
                    <div class="w3-col l4 w3-margin-left">
                        <label for="style">Select Style</label>
                        <select name="style" id="style" class="form-control" value="{{ $clothing->style}}">
                            <option value="">--Select Style--</option>
                            <option value="jumper">Jumper</option>
                            <option value="half jumper">Half Jumper</option>
                            <option value="gown">Gown</option>
                        </select>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col l4 w3-margin-left">
                        <label for="gender">Select Gender:</label>
                        <select name="gender" id="gender" class="form-control" value="{{ $clothing->gender}}">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="w3-col l4 w3-margin-left">
                        <label for="date">Date of Order</label>
                        <input type="date" id="date" class="form-control" name="date" value="{{ $clothing->date}}">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col  l4 w3-margin-left">
                        <label for="size">Select Size:</label>
                        <select name="size" id="size" class="form-control" value="{{ $clothing->size}}">
                            <option value="">--Select Size--</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="extralarge">Extra Large</option>
                        </select>
                    </div>
                    <div class="w3-col l4 w3-margin-left">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" class="w3-round w3-border w3-input"
                               value="{{ $clothing->email}}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-col l4 w3-margin-left">
                        <label for="phone">Your Phone Number:</label>
                        <input type="tel" id="phone" name="phone" class="w3-round w3-border w3-input"
                               value="{{ $clothing->phone}}">
                    </div>
                    <div class="w3-col l4 w3-margin-left">
                        <label for="additionaldetails">Additional Details:</label><br>
                        <textarea name="additionaldetails" id="additionaldetails" cols="40"
                                  value="{{ $clothing->additionaldetails}}" rows="2"></textarea>
                    </div>
                </div>
                <input type="submit" value="Update Details"
                       class="w3-right w3-margin-right w3-section w3-border w3-btn w3-button w3-hover-blue w3-round w3-indigo">
            </form>
        </div>
    </div>
@endsection
