<?php

namespace App/Http/Models;

class Category extends Eloquent{

  protected $fillable = array();

  public function products(){

    return $this->belongsTo('Product');
  }
