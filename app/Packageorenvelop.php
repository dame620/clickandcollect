<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Packageorenvelop extends Model
{
    protected $guarded=[];

    public function products(){

        return $this->hasMany(Product::class);
        
    }

    protected static function boot(){
 
        parent::boot();
    
        //ce created is an event
       /* static::created(function ($packageorenvelop){
            $packageorenvelop->products()->create([
                //'quantity'=>'',
            ]); 
    
        });
    */
    }
    
}
