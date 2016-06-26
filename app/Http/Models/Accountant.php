<?php

class Product extends Eloquent{

  protected $fillable = array('');

  public function account(){
    return $this->hasMany('Employee');
  }
