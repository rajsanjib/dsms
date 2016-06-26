<?php

class Brand extends Eloquent{

  protected $fillable = array('');

  public function product(){
    return $this->hasMany('Product');
  }

  
