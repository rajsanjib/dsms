@extends('includes.master')

@section('title','Purchase')

@section('navbar')
    @include('includes.navbar')
@endsection

@section('content')
    @parent
    <form action="{{url('purchase/add/')}}" method="get">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Customer Id</span>
  <input type="text" class="form-control" value="{{$customerId}}" placeholder="{{$customerId}}" aria-describedby="basic-addon1 name="customerId"">
</div>

<div class="input-group">
    <span class="input-group-addon" id="basic-addon1">Product Id</span>
  <input type="text" class="form-control" placeholder="Product id" name="productId" aria-describedby="basic-addon2">
</div>

<div class="input-group">
  <span class="input-group-addon">Quantity</span>
  <input type="text" class="form-control" name="quantity">
</div>

 <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection
