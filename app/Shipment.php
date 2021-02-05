<?php

namespace App;

use App\Statu;
use App\Packageorenvelop;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $guarded=[];
    
    public function packageorenvelops(){

        return $this->hasMany(Packageorenvelop::class);
        
    }

    public function statu(){

        return $this->belongsTo(Statu::class);
        
    }

    protected static function boot(){
 
        parent::boot();

        $status = Statu::where('libelles', 'EN ATTENTE ENLEVEMENT')->first();
    
        //ce created is an event
        static::creating(function ($shipment) use ($status) {
            $shipment->statu_id = $status->id;
        });
    
    }

}
