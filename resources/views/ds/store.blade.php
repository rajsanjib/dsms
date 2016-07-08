@extends('includes.master')

@section('title','Store')

@section('content')

    @parent
    <table class="table">
      <thead>
        <tr>
          <th>Store Rack Id</th>
          <th>Product Name</th>
          <th>Availabe Quantity</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($stores as $store)
        <tr>
          <td>{{ $store->id }}</td>
          <td>{{ $store->product_name }}</td>
          <td>{{ $store->available }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
