<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productPage($product_id,$shop_id){
        return "This is about page id ".$product_id." and shop id ".$shop_id;
    }
}