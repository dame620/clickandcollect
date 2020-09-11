<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Packageorenvelop extends Model
{
    protected $guarded=[];

    public function products(){

        return $this->hasMany(Product::class);
        
    }

    public function user(){

        return $this->belongsTo(User::class);
        
    }
    protected static function boot()
    {
       parent::boot();
    
       static::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }
    
    
}
