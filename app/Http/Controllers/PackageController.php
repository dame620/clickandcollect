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

		if ($request->ajax()) {
			return ['success' => true, 'wrappers' => $created_wrappers, 'products' => $created_products];
		}

    }

}
