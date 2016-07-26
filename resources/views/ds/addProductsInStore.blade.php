
@extends('master')

@section('title','All Products')

@section('content')

    @parent
  <form class="form" action="/store/productAdded" method="get">
    <h1>Add Products to Store</h1>
    @foreach($info as $s)

    <label class="label-group">Product Id:</label>
      <input type="text" placeholder="ID" name="product_id" value="{{$s->product_id}}">

    <label class="label-group">Quantity:</label>
      <input type="text" placeholder="Max Capacity" name="quantity" value="{{50 - $s->available}}">
@endforeach
    <button class="submitbtn ">Submit</button>
  </form>
@endsection
