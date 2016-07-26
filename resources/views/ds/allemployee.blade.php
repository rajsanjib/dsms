@extends('master')

@section('title','Edit Employee Profile')

@section('content')

    @parent


<table class="table" cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th> Name</th>
      <th> Gender</th>
      <th> Date of Birth</th>
      <th> Date Joined</th>
      <th> Contact Number</th>
      <th> E-mail</th>
      <th> Address</th>
      <th> Position</th>
      <th> Salary</th>
      <th> Salary Paid </th>
    </tr>
  </thead>

  <tbody>
      @foreach($employee as $e)
    <tr>
      <th> {{$e->first_name}} {{$e->middle_name}} {{$e->last_name}}</th>
      <th> {{$e->gender}}</th>
      <th> {{$e->date_joined}}</th>
      <th> {{$e->dob}}</th>
      <th> {{$e->contact_number}}</th>
      <th> {{$e->email}}</th>
      <th> {{$e->address}}</th>
      <th> {{$e->position}}</th>
      <th> {{$e->salary}}</th>
      <th><a href="{{url('employee/pay', $e->id)}}"> Pay </a></th>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
