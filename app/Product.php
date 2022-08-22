<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


  public function category_name(){

   return $this->belongsTo('App\Category','cat_id');


  }

  public function slipper_name(){

   return $this->belongsTo('App\Slipper','slipper_id');


  }




}
