<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $guarded=[];
    
    public function user(){

        return $this->hasOne(User::class);
        
    }
}
