<?php

namespace App/Http/Models;

class Supplier extends Eloquent{

  public function products(){
    return $this->hasMany('Product');
  }

}
