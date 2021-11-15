<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    function aboutPage(){
        return view('practics.about');
    }
}
