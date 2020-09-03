<?php

namespace App\Http\Controllers;
use App\Packageorenvelop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create() 
    {
        //dd(Auth::user());
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
       
       return  "votre requete a ete bien prise en compte";
       redirect('/');

 

    }

}
