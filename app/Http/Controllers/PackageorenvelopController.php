<?php

namespace App\Http\Controllers;
use App\Packageorenvelop;
use Illuminate\Http\Request;

class PackageorenvelopController extends Controller
{
    public function create(){

        return view('/package/create');

    }
    public function store(Request $request,  Packageorenvelop $pack){
       
        /*
        $data = request()->validate([
            'length'=>'',
            'width'=>'',
        ]);
        //dd($data);
      
        \App\Packageorenvelop::create($data);
    */
    
    // dd($request->all());
   
      
    $pack::create($request->all());
       
       return  redirect('/');

 

    }

}
