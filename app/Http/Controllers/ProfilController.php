<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function show() 
    {
        //$newDate = Carbon::now()->addDays(5);
        //$fifthday=$newDate->toDateString();
        $user = Auth::user();
        
        return view('profil.show', compact('user'));
    }
}
