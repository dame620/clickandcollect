<?php

namespace App;

use App\Packageorenvelop;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $guarded=[];
    
    public function packageorenvelops(){

        return $this->hasMany(Packageorenvelop::class);
        
    }
}
