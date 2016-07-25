@extends('master')

@section('title','Add Product')

@section('content')

    @parent

<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Invoice</h2>
        </div>
        <hr>
        <div class="row">

        </div>
        <div class="row">

          <div class="col-xs-6 text-right">
            <address>
              <strong>Billing Date:</strong><br>
              {{date('Y-m-d')}}<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Item</strong></td>
                      <td class="text-center"><strong>Price</strong></td>
                      <td class="text-center"><strong>Quantity</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                  @foreach ($purchase as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td class="text-center">{{$item->selling_price}}</td>
                    <td class="text-center">{{$item->quantity}}</td>
                    <td class="text-right">{{$item->total_price}}</td>
                    <?php $grandTotal = 0;
                            foreach ($purchase as $key) {
                                $grandTotal = $grandTotal + $key->total_price;
                            } ?>
                  </tr>
              @endforeach
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">{{$grandTotal}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
