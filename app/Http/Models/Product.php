<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

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

  public function warehouse(){
    return $this->belogsTo('Warehouse');
  }

  public function category(){
    return $this->hasOne('App\Http\Models\Categories');
  }

  public function brand(){
      return $this->hasOne('Brand');
 }

}
