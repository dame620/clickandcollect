<?php

namespace App;

use App\Packageorenvelop;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    
    public function packageorenvelop(){

        return $this->belongsTo(Packageorenvelop::class);
        
    }
}
