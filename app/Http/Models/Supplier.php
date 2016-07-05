<?php

namespace App\Http\Modes;

namespace App/Http/Models;

class Supplier extends Eloquent{

  public function products(){
    return $this->hasMany('Product');
  }

}
