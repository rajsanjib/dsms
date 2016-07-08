<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model{

  protected $fillable = array();

  public function products(){
    return $this->belongsToMany('App\Http\Models\Product');
  }

}
