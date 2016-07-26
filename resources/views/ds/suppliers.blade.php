@extends('master')

@section('title','All Products')

@section('content')

    @parent
    <table class="table" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th># Supplier Id</th>
          <th>Supplier Name</th>
          <th>Address</th>
          <th>Contact Number</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($suppliers as $supplier)
        <tr>
          <td>{{ $supplier->id }}</td>
          <td>{{ $supplier->name }}</td>
          <td>{{ $supplier->address }}</td>
          <td>{{ $supplier->contact_number }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection
