@extends('master')

@section('title','All Products')

@section('content')

    @parent
  <form class="form" action="/supply/paid" method="get">
    <h1>Supply payment</h1>
    <label class="label-group">Supply ID:</label>
      <input type="text" placeholder="ID" name="id" value="{{$id}}">

    <label class="label-group">Accountant ID:</label>
      <input type="text" placeholder="Accountant ID" name="accountant_id">

    <label class="label-group">Total Amount:</label>
      <input type="number" placeholder="Total Amount" name="total_amount">

    <label class="label-group">Amount Paid:</label>
      <input type="text" placeholder="Amount" name="paid_amount">

    <button class="submitbtn ">Submit</button>
  </form>
@endsection
