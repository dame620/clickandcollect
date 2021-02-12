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

         
   

    //function qui gere la logique du quote 
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

    //cette foncion est appelé par les composent pour donner le shipment
    public function storeshipment(Request $request){
        $packages=$request->packages;
        $responses = [];
        foreach($packages as $package){
            
            $response=$this->getshipment($package['weight'], $package['length'], $package['width'], $package['height'], $package['pickuppostalCode'] , $package['pickupcityName'], $package['pickupcountryCode'],  $package['pickupaddressLine1'], $package['pickupcountyName'], $package['pickupemail'], $package['pickupphone'], $package['pickupmobilePhone'], $package['pickupcompanyName'], $package['pickupfullName'], $package['pickupdate'], $package['shipperpostalCode'] , $package['shippercityName'], $package['shippercountryCode'],  $package['shipperaddressLine1'], $package['shippercountyName'], $package['shipperemail'], $package['shipperphone'], $package['shippermobilePhone'], $package['shippercompanyName'], $package['shipperfullName'], $package['receiverpostalCode'] , $package['receivercityName'], $package['receivercountryCode'],  $package['receiveraddressLine1'], $package['receivercountyName'], $package['receiveremail'], $package['receiverphone'], $package['receivermobilePhone'], $package['receivercompanyName'], $package['receiverfullName']);
            array_push($responses, $response);
        }
        return ['responses' => $responses];
    }


    public function getshipment($weight, $length, $width, $height, $pickuppostalCode, $pickupcityName, $pickupcountryCode, $pickupaddressLine1, $pickupcountyName, $pickupemail, $pickupphone, $pickupmobilePhone, $pickupcompanyName, $pickupfullName, $pickupdate, $receiverpostalCode, $receivercityName, $receivercountryCode, $receiveraddressLine1, $receivercountyName, $receiveremail, $receiverphone, $receivermobilePhone, $receivercompanyName, $receiverfullName, $shipperpostalCode, $shippercityName, $shippercountryCode, $shipperaddressLine1, $shippercountyName, $shipperemail, $shipperphone, $shippermobilePhone, $shippercompanyName, $shipperfullName)
    {
       

       // receiverpostalCode: null,
       // shipperpostalCode: null,
       
        /*$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-mock.dhl.com/mydhlapi/shipments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "plannedShippingDateAndTime": '. $pickupdate.',
            "pickup": {
              "isRequested": false,
              "closeTime": "18:00",
              "pickupDetails": {
                "postalAddress": {
                  "postalCode": '. $pickuppostalCode .',
                  "cityName": '. $pickupcityName .',
                  "countryCode":  '. $pickupcountryCode .',
                  "addressLine1": '. $pickupaddressLine1 .',
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": '. $pickupcountyName .' 
                },
                "contactInformation": {
                  "email": '. $pickupemail .',
                  "phone": '. $pickupphone .',
                  "mobilePhone": '. $pickupmobilePhone .',
                  "companyName": '. $pickupcompanyName .',
                  "fullName": '. $pickupfullName .'
                }
              }
            },
            "productCode": "P",
            
            "accounts": [
              {
                "typeCode": "shipper",
                "number": "403022667"
              }
            ],
            
            "customerDetails": {
              "shipperDetails": {
                "postalAddress": {
                 "postalCode": '. $shipperpostalCode .',
                  "cityName": '. $shippercityName .',
                  "countryCode": '. $shippercountryCode.',
                  "addressLine1": '.$shipperaddressLine1.',
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": '.$shippercountyName.'
                },
                "contactInformation": {
                 "email": '.$shipperemail.',
                  "phone": '.$shipperphone.',
                  "mobilePhone": '.$shippermobilePhone.',
                  "companyName": '.$shippercompanyName.',
                  "fullName": '.$shipperfullName.'
                }
              },
              "receiverDetails": {
                "postalAddress": {
                 "postalCode": '.$receiverpostalCode.',
                  "cityName": '.$receivercityName.'
                  "countryCode": '.$receivercountryCode.',
                  "addressLine1": '.$receiveraddressLine1.',
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": '.$receivercountyName.'
                },
                "contactInformation": {
                  "email": '.$receiveremail.',
                  "phone": '. $receiverphone .',
                  "mobilePhone":  '.$receivermobilePhone.',
                  "companyName": '. $receivercompanyName .',
                  "fullName": '.$receiverfullName.'
                }
              }
            },
            "content": {
              "packages": [
                {
                  "weight": '. $weight .',
                  "dimensions": {
                    "length": '. $length .',
                    "width": '.$width .',
                    "height": '. $height .'
                  },
                  "customerReferences": [
                    {
                      "value": "Customer reference"
                    }
                  ],
                 
                  "description": "Piece content description",
                 
                  "labelText": [
                    {
                      "position": "left",
                      "caption": "text caption",
                      "value": "text value"
                    }
                  ],
                  "labelDescription": "bespkoe label description"
                }
              ],
              "isCustomsDeclarable": true,
              "declaredValue": 150,
              "declaredValueCurrency": "CZK",
              "description": "shipment description",
              "incoterm": "DAP",
              "unitOfMeasurement": "metric"
            },
          
          
            "shipmentNotification": [
              {
                "typeCode": "email",
                "receiverId": "dev@shopmeaway.com",
                "languageCode": "eng",
                "languageCountryCode": "en",
                "bespokeMessage": "message to be included in the notification"
              }
            ],
          
            "getOptionalInformation": false
          }',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'Message-Reference: d0e7832e-5c98-11ea-bc55-0242ac13',
            'Message-Reference-Date: Wed, 21 Oct 2015 07:28:00 GMT',
            'Plugin-Name: ',
            'Plugin-Version: ',
            'Shipping-System-Platform-Name: ',
            'Shipping-System-Platform-Version: ',
            'Webstore-Platform-Name: ',
            'Webstore-Platform-Version: ',
            'authorization: Basic ZGVtby1rZXk6ZGVtby1zZWNyZXQ=',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
*/
        //start second request
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://express.api.dhl.com/mydhlapi/test/shipments',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "plannedShippingDateAndTime": "2021-02-15T14:00:31GMT+00:00",
            "pickup": {
              "isRequested": false,
              "closeTime": "18:00",
              "pickupDetails": {
                "postalAddress": {
                  "postalCode": "'.$pickuppostalCode.'",
                  "cityName": "'.$pickupcityName.'",
                  "countryCode": "'.$pickupcountryCode.'",
                  "addressLine1": "'.$pickupaddressLine1.'",
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": "'.$pickupcountyName.'"
                },
                "contactInformation": {
                  "email": "'.$pickupemail.'",
                  "phone": "'.$pickupphone.'",
                  "mobilePhone": "'.$pickupmobilePhone.'",
                  "companyName": "'.$pickupcompanyName.'",
                  "fullName": "'.$pickupfullName.'"
                }
              }
            },
            "productCode": "P",
            "accounts": [
              {
                "typeCode": "shipper",
                "number": "403022667"
              }
            ],
            "customerDetails": {
              "shipperDetails": {
                "postalAddress": {
                  "postalCode": "",
                  "cityName": "'.$pickupcityName.'",
                  "countryCode": "'.$pickupcountryCode.'",
                  "addressLine1": "'.$shipperaddressLine1.'",
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": "'.$shippercountyName.'"
                },
                "contactInformation": {
                  "email": "'.$shipperemail.'",
                  "phone": "'.$shipperphone.'",
                  "mobilePhone": "'.$shippermobilePhone.'",
                  "companyName": "'.$shippercompanyName.'",
                  "fullName": "'.$shipperfullName.'"
                }
              },
              "receiverDetails": {
                "postalAddress": {
                  "postalCode": "",
                  "cityName": "Prague",
                  "countryCode": "CZ",
                  "addressLine1": "'.$receiveraddressLine1.'",
                  "addressLine2": "addres2",
                  "addressLine3": "addres3",
                  "countyName": "'.$receivercountyName.'"
                },
                "contactInformation": {
                  "email": "'.$receiveremail.'",
                  "phone": "'.$receiverphone.'",
                  "mobilePhone": "'.$receivermobilePhone.'",
                  "companyName": "'.$receivercompanyName.'",
                  "fullName": "'.$receiverfullName.'"
                }
              }
              },
            "content": {
              "packages": [
                {
                  "weight": '.$weight.',
                  "dimensions": {
                    "length": ' .$length. ',
                    "width": '.$width.',
                    "height": '.$height.'
                  },
                  "customerReferences": [
                    {
                      "value": "Customer reference"
                    }
                  ],
                  "description": "Piece content description",
                  "labelText": [
                    { 
                      "position": "left",
                      "caption": "text caption",
                      "value": "text value"
                    }
                  ],
                  "labelDescription": "bespkoe label description"
                }
              ],
              "isCustomsDeclarable": true,
              "declaredValue": 10,
              "declaredValueCurrency": "USD",
              "description": "line item description",
              "incoterm": "DAP",
              "unitOfMeasurement": "metric"
              },
            "shipmentNotification": [
              {
                "typeCode": "email",
                "receiverId": "test@gmail.com",
                "languageCode": "eng",
                "languageCountryCode": "en",
                "bespokeMessage": "message to be included in the notification"
              }
            ]
          }',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic c2hvcG1lYXdheXNTTjpRXjd0QiEyYkpANm0=',
            'Content-Type: application/json',
            'Cookie: BIGipServer~WSB~pl_wsb-express-chd.dhl.com_443=308824229.64288.0000'
          ),
        ));
     

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;

        //end second request

    }


    /*public function store(Request $request) 
    {
        $response = $this->getRates($request->width, $request->height, $request->weight, $request->length); 
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-mock.dhl.com/mydhlapi/shipments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{  "plannedShippingDateAndTime": "2019-08-04T14:00:31GMT+01:00",  "pickup": {    "isRequested": false,    "closeTime": "18:00",    "location": "reception",    "specialInstructions": [      {        "value": "please ring door bell",        "typeCode": "TBD"      }    ],    "pickupDetails": {      "postalAddress": {        "postalCode": "14800",        "cityName": "Prague",        "countryCode": "CZ",        "provinceCode": "CZ",        "addressLine1": "V Parku 2308/10",        "addressLine2": "addres2",        "addressLine3": "addres3",        "countyName": "Central Bohemia"      },      "contactInformation": {        "email": "that@before.de",        "phone": "+1123456789",        "mobilePhone": "+60112345678",        "companyName": "Company Name",        "fullName": "John Brew"      },      "registrationNumbers": [        {          "typeCode": "VAT",          "number": "CZ123456789",          "issuerCountryCode": "CZ"        }      ],      "bankDetails": [        {          "name": "Russian Bank Name",          "settlementLocalCurrency": "RUB",          "settlementForeignCurrency": "USD"        }      ]    },    "pickupRequestorDetails": {      "postalAddress": {        "postalCode": "14800",        "cityName": "Prague",        "countryCode": "CZ",        "provinceCode": "CZ",        "addressLine1": "V Parku 2308/10",        "addressLine2": "addres2",        "addressLine3": "addres3",        "countyName": "Central Bohemia"      },      "contactInformation": {        "email": "that@before.de",        "phone": "+1123456789",        "mobilePhone": "+60112345678",        "companyName": "Company Name",        "fullName": "John Brew"      },      "registrationNumbers": [        {          "typeCode": "VAT",          "number": "CZ123456789",          "issuerCountryCode": "CZ"        }      ],      "bankDetails": [        {          "name": "Russian Bank Name",          "settlementLocalCurrency": "RUB",          "settlementForeignCurrency": "USD"        }      ]    }  },  "productCode": "D",  "localProductCode": "D",  "getRateEstimates": false,  "accounts": [    {      "typeCode": "shipper",      "number": "123456789"    }  ],  "valueAddedServices": [    {      "serviceCode": "II",      "value": 100,      "currency": "GBP",      "method": "cash",      "dangerousGoods": [        {          "contentId": "908",          "dryIceTotalNetWeight": 12,          "unCode": "UN-7843268473"        }      ]    }  ],  "outputImageProperties": {    "printerDPI": 300,    "customerBarcodes": [      {        "content": "barcode content",        "textBelowBarcode": "text below barcode",        "symbologyCode": "93"      }    ],    "customerLogos": [      {        "fileFormat": "PNG",        "content": "base64 encoded image"      }    ],    "encodingFormat": "pdf",    "imageOptions": [      {        "typeCode": "label",        "templateName": "ECOM26_84_001",        "isRequested": true,        "hideAccountNumber": false,        "numberOfCopies": 1,        "invoiceType": "commercial",        "languageCode": "eng"      }    ],    "splitTransportAndWaybillDocLabels": true,    "allDocumentsInOneImage": true,    "splitDocumentsByPages": true,    "splitInvoiceAndReceipt": true  },  "customerReferences": [    {      "value": "Customer reference",      "typeCode": "CU"    }  ],  "identifiers": [    {      "typeCode": "shipmentId",      "value": "1111111111"    }  ],  "customerDetails": {    "shipperDetails": {      "postalAddress": {        "postalCode": "14800",        "cityName": "Prague",        "countryCode": "CZ",        "provinceCode": "CZ",        "addressLine1": "V Parku 2308/10",        "addressLine2": "addres2",        "addressLine3": "addres3",        "countyName": "Central Bohemia"      },      "contactInformation": {        "email": "that@before.de",        "phone": "+1123456789",        "mobilePhone": "+60112345678",        "companyName": "Company Name",        "fullName": "John Brew"      },      "registrationNumbers": [        {          "typeCode": "VAT",          "number": "CZ123456789",          "issuerCountryCode": "CZ"        }      ],      "bankDetails": [        {          "name": "Russian Bank Name",          "settlementLocalCurrency": "RUB",          "settlementForeignCurrency": "USD"        }      ]    },    "receiverDetails": {      "postalAddress": {        "postalCode": "14800",        "cityName": "Prague",        "countryCode": "CZ",        "provinceCode": "CZ",        "addressLine1": "V Parku 2308/10",        "addressLine2": "addres2",        "addressLine3": "addres3",        "countyName": "Central Bohemia"      },      "contactInformation": {        "email": "that@before.de",        "phone": "+1123456789",        "mobilePhone": "+60112345678",        "companyName": "Company Name",        "fullName": "John Brew"      },      "registrationNumbers": [        {          "typeCode": "VAT",          "number": "CZ123456789",          "issuerCountryCode": "CZ"        }      ],      "bankDetails": [        {          "name": "Russian Bank Name",          "settlementLocalCurrency": "RUB",          "settlementForeignCurrency": "USD"        }      ]    },    "buyerDetails": {      "postalAddress": {        "postalCode": "14800",        "cityName": "Prague",        "countryCode": "CZ",        "provinceCode": "CZ",        "addressLine1": "V Parku 2308/10",        "addressLine2": "addres2",        "addressLine3": "addres3",        "countyName": "Central Bohemia"      },      "contactInformation": {        "email": "buyer@domain.com",        "phone": "+44123456789",        "mobilePhone": "+42123456789",        "companyName": "Customer Company Name",        "fullName": "Mark Companer"      },      "registrationNumbers": [        {          "typeCode": "VAT",          "number": "CZ123456789",          "issuerCountryCode": "CZ"        }      ],      "bankDetails": [        {          "name": "Russian Bank Name",          "settlementLocalCurrency": "RUB",          "settlementForeignCurrency": "USD"        }      ]    }  },  "content": {    "packages": [      {        "typeCode": "2BP",        "weight": 2.5,        "dimensions": {          "length": 5,          "width": 11,          "height": 20        },        "customerReferences": [          {            "value": "Customer reference",            "typeCode": "CU"          }        ],        "identifiers": [          {            "typeCode": "shipmentId",            "value": "1111111111"          }        ],        "description": "Piece content description",        "labelBarcodes": [          {            "position": "left",            "symbologyCode": "93",            "content": "string",            "textBelowBarcode": "text below left barcode"          }        ],        "labelText": [          {            "position": "left",            "caption": "text caption",            "value": "text value"          }        ],        "labelDescription": "bespkoe label description"      }    ],    "isCustomsDeclarable": true,    "declaredValue": 150,    "declaredValueCurrency": "CZK",    "exportDeclaration": {      "lineItems": [        {          "number": 1,          "description": "line item description",          "price": 150,          "priceCurrency": "CZK",          "quantity": {            "value": 1,            "unitOfMeasurement": "BOX"          },          "commodityCodes": [            {              "typeCode": "outbound",              "value": "HS1111111111"            }          ],          "exportReasonType": "permanent",          "manufacturerCountry": "CZ",          "exportControlClassificationNumber": "US123456789",          "weight": {            "netValue": 10,            "grossValue": 10          }        }      ],      "invoice": {        "number": "12345-ABC",        "date": "2020-03-18",        "signatureName": "Brewer",        "signatureTitle": "Mr.",        "signatureImage": "Base64 encoded image"      },      "remarks": [        {          "value": "declaration remark"        }      ],      "additionalCharges": [        {          "value": 10,          "caption": "fee"        }      ],      "destinationPortName": "port details",      "payerVATNumber": "12345ED",      "recipientReference": "recipient reference",      "exporter": {        "id": "123",        "code": "EXPCZ"      },      "packageMarks": "marks",      "declarationNotes": [        {          "value": "up to three declaration notes"        }      ],      "exportReference": "export reference",      "exportReason": "export reason",      "licenses": [        {          "typeCode": "export",          "value": "license"        }      ]    },    "description": "shipment description",    "USFilingTypeValue": "12345",    "incoterm": "DAP",    "unitOfMeasurement": "metric"  },  "documentImages": [    {      "typeCode": "INV",      "imageFormat": "PDF",      "content": "base64 encoded image"    }  ],  "onDemandDelivery": {    "deliveryOption": "servicepoint",    "location": "front door",    "specialInstructions": "ringe twice",    "gateCode": "1234",    "whereToLeave": "concierge",    "neighbourName": "Mr.Dan",    "neighbourHouseNumber": "777",    "authorizerName": "Newman",    "servicePointId": "SPL123",    "requestedDeliveryDate": "2020-04-20"  },  "requestOndemandDeliveryURL": false,  "shipmentNotification": [    {      "typeCode": "email",      "receiverId": "receiver@email.com",      "languageCode": "eng",      "languageCountryCode": "en",      "bespokeMessage": "message to be included in the notification"    }  ],  "prepaidCharges": [    {      "typeCode": "freight",      "currency": "CZK",      "value": 200,      "method": "cash"    }  ],  "getOptionalInformation": false}',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'Message-Reference: d0e7832e-5c98-11ea-bc55-0242ac13',
            'Message-Reference-Date: Wed, 21 Oct 2015 07:28:00 GMT',
            'Plugin-Name: ',
            'Plugin-Version: ',
            'Shipping-System-Platform-Name: ',
            'Shipping-System-Platform-Version: ',
            'Webstore-Platform-Name: ',
            'Webstore-Platform-Version: ',
            'authorization: Basic ZGVtby1rZXk6ZGVtby1zZWNyZXQ=',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return [
            'response' => $response,   
         ];

    }  */
}
