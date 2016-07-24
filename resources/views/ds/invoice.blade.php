@extends('includes.master')

@section('title','Invoice')

@section('navbar')
    @include('includes.navbar')
@endsection


@section('content')
    @parent
    <table class="table">
      <thead>
        <tr>
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
          <?php
            $purchaseSum = 0;
          ?>
          @foreach ($purchases as $purchase)
              <?php
                $Price = $purchase->quantity * $purchase->price;
              ?>
        <tr>
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->product_name }}</td>
          <td>{{ $purchase->selling_price }}</td>
          <td>{{ $purchase->quantity }}</td>
          <td>{{ $price}}</td>
        </tr>
        <?php
            $purchaseSum = $purchaseSum + $price;
        ?>
        @endforeach
      </tbody>
    </table>
    <div class="row">
        <ul>
            <li> Total: {{$purchaseSum}} </li>
            <li> VAT (13%): {{0.13 * $purchaseSum}}</li>
            <li> Grand Total: {{$purchaseSum + 0.13*$purchaseSum}}
    </div>

@endsection
