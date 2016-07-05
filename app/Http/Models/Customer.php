<?php

namespace App\Http\Modes;

class Customer extends Eloquent{

  protected $fillable = array('');

  public function products(){
    $this->belongsTo('Product');
  }
