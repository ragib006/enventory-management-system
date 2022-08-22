<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attentdance extends Model
{




  public function my_attendance(){


    return $this->belongsTo('App\Employee','user_id')->where('status',1);

  }






}
