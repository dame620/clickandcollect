<?php

namespace App\Http\Controllers;
use App\Product;
use App\Packageorenvelop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function store(Request $request){
        
        $created_wrappers = [];
		$created_products = [];
		$packages = $request->get('data');

		foreach ($packages as $package) {
		
			
			$wrapper = Packageorenvelop::create([
				'width'  => $package['width'],
				'height' => $package['height'],
				'length' => $package['length'],
				'weight' => $package['weight'],
				'origincountry'=> $package['origincountry'],
                'destinationcountry'=> $package['destinationcountry'],
				'is_smallformat' => false,
                'is_bigformat'=> false,
				'is_nophytho' => $package['is_nophytho'],
				'is_phythoexiste' => $package['is_phythoexiste'],
				'is_phytho_your_own' => $package['is_phytho_your_own'],
				'is_phytho_provide_tosma' => $package['is_phytho_provide_tosma'],	
				'is_origincertificat'=> $package['is_origincertificat'],
            	'is_noorigincertificat'=> $package['is_noorigincertificat'],
            	'is_origin_certificat_your_own'=> $package['is_origin_certificat_your_own'],
                'is_origin_certificat_provide_to_sma'=> $package['is_origin_certificat_provide_to_sma'],
                
			]);

			$created_wrappers[] = $wrapper;
			

			if (count($package['products']) > 0) {
				foreach($package['products'] as $product) {
					$created_products[] = Product::create([
						'unit_price'       => $product['unit_price'],
						'quantity'   => $product['quantity'],
                        'product_type' => $product['product_type'],
                        'description' => $product['description'],
                        'packageorenvelop_id' => $wrapper->id,
                        
					]);
				}
			}
        }	
       // dd($request->ajax());
	   //$request->session()->flash('status', 'Task was successful!');
	   //Session::flash('success', "le paquet a été bien savegarder");
	  // return redirect()->route('package.create')->with('success', 'le paquet a été bien enregistrer');
	   
		if ($request->ajax()) {
			
			return ['success' => true, 'wrappers' => $created_wrappers, 'products' => $created_products];
			
		}



    }

}
