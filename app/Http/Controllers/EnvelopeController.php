<?php

namespace App\Http\Controllers;

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
        

    }

}
