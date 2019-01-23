<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
 public $timestamps = true;	
    
 protected $table = 'companies';


 public function contract() {

 return $this->belongsTo('App\Contract');

}





}
