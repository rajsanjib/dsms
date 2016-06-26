<?php

class Account extends Eloquent{

  protected $fillable = array('');

  public function employee() {
    return $this->hasMany('Employee');
  }
