<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function contactPage(){
        $name = ["Kyaw","Bo","Lin"];
        return view('practics.contact',[
            'current' => $name
        ]);
    }
}
