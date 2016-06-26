<?php

class Customer extends Eloquent{

  protected $fillable = array('');

  public function products(){
    $this->belongsTo('Product');
  }
