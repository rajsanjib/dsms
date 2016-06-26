<?php

class Store extends Eloquent{

  protected $fillable = array('');

  public function products(){
    return $this->hasOne('Product');
  }

  public function warehouse(){
    return this->belongsToMany('Warehouse');
  }
