@extends('master')

@section('title','Edit Employee Profile')

@section('content')

    @parent
	<form class="form" action="/employee/add/true" method="get">
		<h1>Employee Info</h1>
		<label class="label-group">First Name:</label>
			<input type="text" placeholder="First Name" name="first_name" value="">

		<label class="label-group">Middle Name:</label>
			<input type="text" placeholder="Middle Name" name="middle_name" value="">

		<label class="label-group">Last Name:</label>
			<input type="text" placeholder="Last Name" name="last_name" value="">

		<label class="label-group">Address:</label>
			<input type="text" placeholder="Address" name="address" value="">

		<label class="label-group">Contact:</label>
			<input type="number" placeholder="Ph. number" name="contact_number" value="">

		<label class="label-group">Date of Join:</label>
			<input type="text" placeholder="Date of Join" name="date_joined" value="">

		<label class="label-group">Date of Birth:</label>
			<input type="text" placeholder="Date of birth" name="dob" value="">

		<label class="label-group">Email:</label>
			<input type="email" placeholder="E-mail" name="email" value="">

		<label class="label-group">Position:</label>
			<input type="text" placeholder="Position " name="position" value="">

		<label class="label-group">Gender:</label>
          <input type="text" placeholder="Gender" name="gender" value="">
        <label class="label-group">Salary:</label>
		  <input type="number" placeholder="salary" name="salary">
		<button class="submitbtn " ng-disabled="frm.$envalid" ng-click="getInfo()">Submit</button>
	</form>
@endsection
