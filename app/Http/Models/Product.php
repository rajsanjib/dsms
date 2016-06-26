<?php

namespace App\Http\Models;


class Product extends Eloquent{

  protected $fillable = array('');


  public function customers() {
    return $this->belongsToMany('Customer');
  }

  public function suppliers(){
    return $this->belongsTo('Supplier');
  }
  // public function (){
  //   return $this->belongsToMany('Customers',
  //   'products_suppliers',
  //   'products_warehouse',
  //   'products_store',
  //   'product_store_warehouse'
  // );
  // }

  public function store(){
    return $this->belogsTo('Store');
  }

  public function store(){
    return $this->belogsTo('Warehouse');
  }

  public function category(){
    return $this->hasOne('Category');
  }
}
