<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{


public function many_relation_salary(){

   return $this->hasMany('App\Salary','emp_id');


}

public function many_addentdances(){

   return $this->hasMany('App\Attentdance','user_id');


}



}
