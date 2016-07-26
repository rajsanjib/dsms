@extends('master')

@section('title','Edit Employee Profile')

@section('content')

    @parent


<table class="table" cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th> Name</th>
      <th> Position</th>
      <th> Salary</th>
      <th> Salary Paid </th>
      <th> Month </th>
    </tr>
  </thead>

  <tbody>
      @foreach($employee as $e)
    <tr>
      <th> {{$e->first_name}} {{$e->middle_name}} {{$e->last_name}}</th>
      <th> {{$e->position}}</th>
      <th> {{$e->salary}}</th>
      <th> {{$e->paid}}</th>
      <th> {{$e->month}}</th>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
