@extends('master')

@section('title','Edit Employee Profile')

@section('content')

    @parent

      <form class="form" action="/brand/add" method="get">
        <h1>Brand Name</h1>
        <fieldset class="">

          <label class="label-group">Brand Name</label>
          <input type="text" name="brand_name" placeholder="Brand Name">
        </fieldset>
        <button class="submitbtn">Add</button>
      </form>
@endsection
