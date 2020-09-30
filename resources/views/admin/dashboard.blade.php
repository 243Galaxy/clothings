@extends('layouts.dashboard')
@section('content')
<div class="w3-container"><h1>Welcome to your Dashboard</h1></div>
<div class="w3-row w3-xlarge">
    <div class="w3-padding-small w3-blue w3-margin w3-round"><b> Quick Links</b></div>
	<a style="text-decoration:none;" href="{{ url('admin/updateprofile') }}" class="w3-col l4 m6 w3-padding w3-padding-16">
		<div class="w3-card-4 w3-blue w3-padding-small w3-block w3-round w3-center">
			<div class="w3-circle w3-theme-l4 centered w3-card-4" style="margin:0 auto;width: 60px;height: 60px">
				<span><i class="fa fa-user w3-text-blue w3-bolder"></i></span>
			</div>
			<br>
			<div class="">Update Profile</div>
		</div>
	</a>
	<a style="text-decoration:none;" href="{{ url('admin/changepassword') }}" class="w3-col l4 m6 w3-padding w3-padding-16">
		<div class="w3-card-4 w3-blue w3-padding-small w3-block w3-round w3-center">
			<div class="w3-circle w3-theme-l4 centered w3-card-4" style="margin:0 auto;width: 60px;height: 60px">
				<span><i class="fa fa-lock w3-text-blue w3-bolder"></i></span>
			</div>
			<br>
			<div class="">Change your Password</div>
		</div>
	</a>
	<a style="text-decoration:none;" href="{{ url('admin/logout') }}" class="w3-col l4 m6 w3-padding w3-padding-16">
		<div class="w3-card-4 w3-blue w3-padding-small w3-block w3-round w3-center">
			<div class="w3-circle w3-theme-l4 centered w3-card-4" style="margin:0 auto;width: 60px;height: 60px">
				<span><i class="fa fa-sign-out-alt w3-text-blue w3-bolder"></i></span>
			</div>
			<br>
			<div class="">Logout</div>
		</div>
	</a>
</div>
@endsection