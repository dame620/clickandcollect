<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{

    protected $guarded = [];
    
    public function shipments(){

        return $this->hasMany(Shipment::class);
        
    }
}
