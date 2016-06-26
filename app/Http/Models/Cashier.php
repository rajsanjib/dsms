<?php

class Cashier extends Eloquent{

  protected $fillable = array('');

  public function employee() {

    return $this->hasOne('Employee');
  }
