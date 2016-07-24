@extends('master')

@section('title','Update Product')

@section('content')

    @parent

    <div class="row">
    <div class="col-md-12">
        <form role="form" action = "/products/updateTrue" method="get">
            <input type="hidden" name="_token" value="{{ csrf_token() }}}}">
            @foreach ($products as $product)

            <div class="form-group">
                <label>
                    Porduct id
                </label>
                <input type="Number" class="form-control"  name='id' value="{{$product->id}}">
            </div>
            <div class="form-group">

                <label for="forid">
                    Porduct name
                </label>
                <input type="text" class="form-control" name='product_name' value="{{$product->product_name}}">
            </div>
            <div class="form-group">

                <label for="forid">
                    Marked price
                </label>
                <input type="Number" class="form-control"  name='marked_price' value="{{$product->marked_price}}">
            </div>
            <div class="form-group">

                <label for="forid">
                    Selling price
                </label>
                <input type="Number" class="form-control" name='selling_price' value="{{$product->selling_price}}">
            </div>
            <div class="form-group">

                <label for="forid">
                    category id
                </label>
                <input type="Number" class="form-control" name='category_id' value="{{$product->category_id}}" >
            </div>
            <div class="form-group">

                <label for="forid">
                    brand id
                </label>
                <input type="Number" class="form-control" name='brand_id' value="{{$product->brand_id}}">


            <button type="submit" class="btn btn-default">
                Submit
            </button>
        </form>
    @endforeach
    </div>
</div>
</div>
@endsection
