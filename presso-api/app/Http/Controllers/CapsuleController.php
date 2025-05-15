<?php

namespace App\Http\Controllers;
use App\Models\Capsule;
use Illuminate\Http\Request;

class CapsuleController extends Controller
{
    // Get all coffee capsules
    function getAllCapsules(){
        
        return Capsule::all();
    }

    // Get all coffee capsules of type Original
    function getOriginal(){
        
        return Capsule::where('type', 'Original')->get();
    }

    // Get all coffee capsules of type Vertuo
    public function getVertuo()   {

        return Capsule::where('type', 'Vertuo')->get();

    }
}
