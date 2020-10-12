<?php

namespace App\Http\Controllers;

use App\Product;
use App\Packageorenvelop;
use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('/envelope/create');
    }

    public function store(Request $request){
        
        $created_wrappers = [];
		$created_products = [];
        $envelopes = $request->get('data');
        
        foreach($envelopes as $envelope){

             $wrapper=Packageorenvelop::create([
                 'weight'  => $envelope['weight'],
                'is_smallformat' => $envelope['is_smallformat'],
                'is_bigformat'=> $envelope['is_bigformat'],
                'origincountry'=> $envelope['origincountry'],
                'destinationcountry'=> $envelope['destinationcountry'],
                'is_nophytho' => $envelope['is_nophytho'],
				'is_phythoexiste' => $envelope['is_phythoexiste'],
				'is_phytho_your_own' => $envelope['is_phytho_your_own'],
				'is_phytho_provide_tosma' => $envelope['is_phytho_provide_tosma'],	
				'is_origincertificat'=> $envelope['is_origincertificat'],
            	'is_noorigincertificat'=> $envelope['is_noorigincertificat'],
            	'is_origin_certificat_your_own'=> $envelope['is_origin_certificat_your_own'],
                'is_origin_certificat_provide_to_sma'=> $envelope['is_origin_certificat_provide_to_sma'],
 
      
             ]);
             $created_wrappers[] = $wrapper;

           

             if(count($envelope['products'])>0){

                foreach($envelope['products'] as $product){

                    $created_products = Product::create([
                        'unit_price'    => $product['unit_price'],
						'quantity'   => $product['quantity'],
                        'product_type' => $product['product_type'],
                        'description' => $product['description'],
                        'packageorenvelop_id' => $wrapper->id,
                        
                    ]);

                }
             }
        }

        if ($request->ajax()) {
			return ['success' => true, 'wrappers' => $created_wrappers, 'products' => $created_products];
		}

    }

}
