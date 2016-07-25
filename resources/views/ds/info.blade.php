@extends('master')

@section('title','All Products')

@section('content')

    @parent
		<div class="row description">
				<div class="col-md-5">
					<img src="#" alt="foto" height="180px" width="100%">
				</div>
				<div class="col-md-7">

					<h2 style="font-size=3em;">Product Name</h2>
					<h4 class="pull-right" > Product-ID</h4>
					<p>this is very good food.this is very good food.this is very good food.this is very good food.this is very good food.this is very good food.</p>
					<h3 class="pull-right"> Rs. Price</h3>
					<p>Items Remaining</p>
					<button class="btn btn-success pull-left"> EDIT</button>

				</div>
			</div>
@endsection
