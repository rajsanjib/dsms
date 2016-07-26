@extends('master')

@section('title','All Products')

@section('content')

    @parent
    <table class="table" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th># Supply Id</th>
          <th>Supplier Name</th>
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Date</th>
          <th>Pay</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($supplies as $supply)
        <tr>

          <td>{{ $supply->id }}</td>
          <td>{{ $supply->name }}</td>
          <td>{{ $supply->product_id }}</td>
          <td>{{ $supply->product_name }}</td>
          <td>{{ $supply->quantity }}</td>
          <td>{{ $supply->quantity * $supply->marked_price }}</td>
          <td>{{ $supply->date }}</td>
          <td> @if ($supply->paid == true)
              Paid
              @else
              <a href="{{ url('/supply/pay/'. $supply->id)}}"> Pay </a>
          @endif
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection
