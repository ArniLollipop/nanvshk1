<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class WCAGController extends Controller
{

    public function show(Request $request)
    {
 var_dump($request->sessiolog());   
    }


     public function setwcag(Request $request)
    {
        var_dump($request->sessiolog());
    }

    
}
