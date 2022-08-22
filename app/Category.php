<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

//ctegory nme show

public function sub_categories(){

 return $this->hasMany('App\Category','parent_id')->where('cat_status',1);


}



public function patent_category(){


  return $this->belongsTo('App\Category','parent_id');

}






}
