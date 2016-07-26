@extends('master')

@section('title','Add Product')

@section('content')

    @parent


    <div class="row">
    <div class="col-md-12">
        <form role="form" action = '/supply/add/send' method="get">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>
                    Supplier id
                </label>
                <input type="Number" class="form-control"  name='supplier_id'>
            </div>
            <div class="form-group">
                <label>
                    Porduct id
                </label>
                <input type="Number" class="form-control"  name='product_id'>
            </div>
            <div class="form-group">

                <label for="forid">
                    Quantity
                </label>
                <input type="text" class="form-control" name='quantity' >
            </div>
            <div class="form-group">

            <button type="submit" class="btn btn-default">
                Submit
            </button>
        </form>
    </div>
</div>
</div>
@endsection
