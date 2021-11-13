<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    function customerMethod(Request $request){
        $name = $request->name;
        $age = $request->age;
        return view('shops.customer',[
            'name' => $name,
            'age' => $age
        ]);
    }
}
