<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PackageResource;

class WrappersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        $user = Auth::user();
        return PackageResource::collection($user->packageorenvelops);
    }
}
