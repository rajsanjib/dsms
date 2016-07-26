@extends('master')

@section('title','All Products')

@section('content')

    @parent
<section> <!--for demo wrap-->
<h1>Store</h1>

<table class="table" cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>Rack Number</th>
      <th>Product Name</th>
      <th> Max Capacity</th>
      <th> Availabe</th>
      <th> Fetch</th>
    </tr>
  </thead>

  <tbody>
      @foreach ($stores as $store)
    <tr>
      <td>{{ $store->id }}</td>
      <td>{{ $store->product_name }}</td>
      <td>{{ $store->capacity }}</td>
      <td>{{ $store->available }}</td>
      <td><a href="{{ url('/store/addProducts/'.$store->id)}}">Fetch </a></td>
  </tr>
  @endforeach
  </tbody>
</table>
</div>
</section>
@endsection
