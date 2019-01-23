<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
   

 public $timestamps = true;	
    
 protected $table = 'purchases';



 public function contract() {

 return $this->belongsTo('App\Contract');

}

   
 public function company() {

 return $this->belongsTo('App\Company');

}
 



 public static function restBalance($contract_id) {
        
  $purchase = App\Purchase::where('contract_id','=',$id)->first();

  return round($purchase->credit_spent);

}







}
