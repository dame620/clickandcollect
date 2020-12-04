<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DhlController extends Controller
{
    public function index(Request $request)
    {  
        $packages = $request->packages;
        $responses = [];
        foreach($packages as $package) {
            $response = $this->getRates($package['width'],$package['height'],$package['weight'],$package['length'],$package['origincountry'],$package['originregion'],$package['destinationcountry'],$package['destinationregion']);
            array_push($responses, json_decode($response));
        }

        return ['responses' => $responses];
    }

    public function store(Request $request) 
    {
        $response = $this->getRates($request->width, $request->height, $request->weight, $request->length); 

    }       
   
    private function getRates($width, $height, $weight, $length, $origincountry, $originregion, $destinationcountry, $destinationregion) {
        $newDate = Carbon::now()->addDays(5);
        $fifthday=$newDate->toDateString();
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://express.api.dhl.com/mydhlapi/test/rates?accountNumber=403022667&originCountryCode=$origincountry&originCityName=$originregion&destinationCountryCode=$destinationcountry&destinationCityName=$destinationregion&plannedShippingDate=$fifthday&isCustomsDeclarable=true&length=$length&weight=$weight&width=$width&height=$height&unitOfMeasurement=metric",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authorization: Basic c2hvcG1lYXdheXNTTjpRXjd0QiEyYkpANm0=",
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "postman-token: be5cfb1a-9ab7-eb0b-79f5-649c3be1a498"
        ),
        ));
     

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        //return ['response' => $response];
        return $response;

    }

}
