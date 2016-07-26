@extends('master')

@section('title','Edit Employee Profile')

@section('content')

    @parent
	<form class="form" action="/employee/edit" method="get">
		<h1>Employee Info</h1>
		@foreach($employee as $e)
		<label class="label-group">First Name:</label>
			<input type="text" placeholder="First Name" name="first_name" value="{{ $e->first_name}}">

		<label class="label-group">Middle Name:</label>
			<input type="text" placeholder="Middle Name" name="middle_name" value="{{$e->middle_name}}">

		<label class="label-group">Last Name:</label>
			<input type="text" placeholder="Last Name" name="last_name" value="{{$e->last_name}}">

		<label class="label-group">Address:</label>
			<input type="text" placeholder="Address" name="address" value="{{$e->address}}">

		<label class="label-group">Contact:</label>
			<input type="number" placeholder="Ph. number" name="contact_number" value="{{$e->contact_number}}">

		<label class="label-group">Date of Join:</label>
			<input type="date" placeholder="Date of Join" name="date_joined" value="{{$e->date_joined}}">

		<label class="label-group">Date of Birth:</label>
			<input type="date" placeholder="Date of birth" name="dob" value="{{$e->dob}}">

		<label class="label-group">Email:</label>
			<input type="email" placeholder="E-mail" name="email" value="{{$e->email}}">

		<label class="label-group">Position:</label>
			<input type="text" placeholder="Position " name="position" value="{{$e->position}}">

		<label class="label-group">Gender:</label>
          <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">MALE</label><br>
          <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">FEMALE</label>
		<input type="number" placeholder="salary" name="salary">
@endforeach
		<button class="submitbtn " ng-disabled="frm.$envalid" ng-click="getInfo()">Submit</button>
	</form>

@endforeach
