@extends('master')

@section('title','All Products')

@section('content')

    @parent
  <form class="form" action="/employee/paid" method="get">
      @foreach($employee as $e)


    <h1>Employee Info</h1>
    <label class="label-group">ID:</label>
      <input type="text" placeholder="ID" name="id" value="{{$e->id}}">

    <label class="label-group">Employee Name:</label>
      <input type="text" placeholder="Employee ID" name="employee_id" value="{{$e->first_name}}">

    <label class="label-group">For Month:</label>
      <input type="text" placeholder="Salary" name="for_month"value="{{date('Y-M')}}">

    <label class="label-group">Total Salary:</label>
      <input type="number" placeholder="Total salary" name="total_amount" value="{{$e->salary}}">

    <label class="label-group">Amount Paid:</label>
      <input type="text" placeholder="Amount" name="paid_amount" value="{{$e->salary}}">
      @endforeach

    <button class="submitbtn " ng-disabled="frm.$invalid" ng-click="getInfo()">Submit</button>
  </form>
@endsection
