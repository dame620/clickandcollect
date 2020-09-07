<?php

namespace App\Http\Controllers;
use App\Product;
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
    public function store(Request $request,  Packageorenvelop $pack, Product $product){
       
        /*
        $data = request()->validate([
            'length'=>'',
            'width'=>'',
        ]);
        //dd($data);
      
        \App\Packageorenvelop::create($data);
    */
    
    //dd($request->get('height'));
   // $product->create()
   
   $producs = $pack->products();
    $pack->create($request->all(), compact('products'));
       
       return  "votre requete a ete bien prise en compte";
       redirect('/');

 

    }

}
