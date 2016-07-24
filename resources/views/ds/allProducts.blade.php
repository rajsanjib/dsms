@extends('master')

@section('title','All Products')

@section('content')

    @parent
    <table class="table" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th># Product Id</th>
          <th>Product Name</th>
          <th>Marked Price</th>
          <th>Selling Price</th>
          <th>Category</th>
          <th>Brand</th>
          <th>Update </th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->marked_price }}</td>
          <td>{{ $product->selling_price }}</td>
          <td>{{ $product->category_name }}</td>
          <td>{{ $product->brand_name }}</td>
          <td><a href="{{ url('products/update', $product->id) }}"> Update</a></td>
          <td><a href="{{ url('products/delete', $product->id) }}"> Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
@endsection
