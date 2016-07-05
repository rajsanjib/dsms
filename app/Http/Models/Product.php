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
