<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productPage(){
        $arrayId = [1,2,3,4,5,6];
        return view('product',[
            'productId' => $arrayId
        ]);
    }

    function productId($productId){
        return "This is product page of the product id is ".$productId;
    }
}
