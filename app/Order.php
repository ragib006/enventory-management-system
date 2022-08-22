<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{



  public function onecustomeroneorder(){


    return $this->belongsTo('App\Costomer','customer_id');

  }






}
