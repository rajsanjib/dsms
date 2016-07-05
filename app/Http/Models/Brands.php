<?php

namespace App\Http\Modes;

class Brand extends Eloquent{

  protected $fillable = array('');

  public function product(){
    return $this->hasMany('Product');
  }
