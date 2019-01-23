<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
 
 public $timestamps = true;	
    
 protected $table = 'contracts';



 public function purchases() {

 return $this->hasMany('App\Purchase');
  
  }


 public function companies() {

 return $this->hasMany('App\Company');
  
 }


 public static function totalBalance($id) {
        
  $contract = App\Contract::where('id','=',$id)->first();

  return round($contract->credit_init);

}
