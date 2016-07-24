@extends('includes.master')

@section('title','Add Product')

@section('content')

    <div class="row">
    <div class="col-md-12">
        <form role="form" action = '/products/add/send' method="get">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>
                    Porduct id
                </label>
                <input type="Number" class="form-control"  name='id'>
            </div>
            <div class="form-group">

                <label for="forid">
                    Porduct name
                </label>
                <input type="text" class="form-control" name='product_name' >
            </div>
            <div class="form-group">

                <label for="forid">
                    Marked price
                </label>
                <input type="Number" class="form-control"  name='marked_price'>
            </div>
            <div class="form-group">

                <label for="forid">
                    Selling price
                </label>
                <input type="Number" class="form-control" name='selling_price'>
            </div>
            <div class="form-group">

                <label for="forid">
                    category id
                </label>
                <input type="Number" class="form-control" name='category_id' >
            </div>
            <div class="form-group">

                <label for="forid">
                    brand id
                </label>
                <input type="Number" class="form-control" name='brand_id'>


            <button type="submit" class="btn btn-default">
                Submit
            </button>
        </form>
    </div>
</div>
</div>
