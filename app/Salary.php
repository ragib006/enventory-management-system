<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

 public function many_salary(){

 return $this->belongsTo('App\Employee','emp_id');

 }


 public function my(){

 return $this->belongsTo('App\Salary','emp_id');

 }



}
