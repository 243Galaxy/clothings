@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="w3-indigo w3-padding w3-large w3-center w3-section">
            <h1>Orders</h1>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message}}</p>
            </div>
        @endif
        <div class="w3-left w3-btn w3-button w3-small w3-pale-blue w3-round w3-border w3-hover-white">
            <a href="{{ url('clothings/create')}}">Make New Order</a>
        </div>
        <br><br>
        <table class="w3-table-all">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>View</th>
            </tr>
            @foreach($clothings as $clothing)
                <tr>
                    <td>{{ $clothing->name }}</td>
                    <td>{{ $clothing->address}}</td>
                    <td>{{ $clothing->email}}</td>
                    <td>
                        <a href="a/{{ $clothing->id }}"
                           class="w3-text-black w3-btn w3-blue w3-border w3-round w3-small">View</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
