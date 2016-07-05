<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Store as Store;

class Store extends Controller
{

  public function allProducts(){
    return Store::products();
  }
