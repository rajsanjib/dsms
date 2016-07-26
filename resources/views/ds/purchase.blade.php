@extends('master')

@section('title','Purchase')

@section('content')
    @parent
    <div class="container">
      <div class="purchase-form row">
        <div class="col-md-8 row">
                  <form role="form" action = "/purchase/add" method="get">
                      @foreach ($purchase as $lastToken)
                    <input type="text" class="form-control" placeholder="Token" name="token" value="{{ $lastToken->token }}">

                      <label>Product Id</label>
                    <input type="text" class="form-control" placeholder="ID" name="product_id" value="">

                    <input type="text" class="form-control" placeholder="Quantity" name=quantity >

                    <button class="btn btn-success btn-lg"> Submit </button>
        </form>
        <div class="col-md-2">
          <a href="{{ url('checkout', $lastToken->token ) }}"<button class="btn btn-warning btn-lg"> Check Out</button></a>
        </div>
        @endforeach

      </div>
  </div>
  @endsection
