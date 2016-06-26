<?php

namespace App/Http/Models;

class Employee extends Eloquent{

  protected $fillable = array();

  public function account(){
    return $this->belongsTo('Account');
  }
