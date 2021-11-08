<?php

use App\Http\Controllers\WebFrontend\aboutController;
use App\Http\Controllers\WebFrontend\contactController;
use App\Http\Controllers\WebFrontend\ProductController;
use App\Http\Controllers\WebFrontend\shopController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',[contactController::class,'contactPage'])->middleware('testMW');

Route::get('about',[aboutController::class,'aboutPage']);

Route::get('shop',[shopController::class,'shopPage']);

Route::get('about/{product_id}/shop/{shop_id}',[ProductController::class,'productPage']);

Route::get('promotions',[Controller::class,'showPromotions']);

Route::post('api/postMethod',[Controller::class,'showPostMethod']);
