<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\mycontroller;
use App\Http\controllers\Front;
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

Route::get("/frontend",[Front::class,'default']);
Route::get("/frontend/contact",[Front::class,'contact']);


Route::get('/', function () {
    return view('welcome');
});
Route::get("/adminpanel",[mycontroller::class,'default']);
Route::get("/adminpanel/register",[mycontroller::class,'register']);
Route::post("/adminpanel/postregister",[mycontroller::class,'postregister']);
Route::get("/adminpanel/login",[mycontroller::class,'login']);
Route::post("/adminpanel/postlogin",[mycontroller::class,'postlogin']);

Route::post("/adminpanel/dashboard/add_to_cart",[mycontroller::class,'add_to_cart']);
// Route::get("/adminpanel/showcart",[mycontroller::class,'showcart']);

Route::get("/adminpanel/cartlist",[mycontroller::class,'cartlist']);
Route::get("/adminpanel/removecart/{id}",[mycontroller::class,'removecart']);
Route::get("/adminpanel/ordernow",[mycontroller::class,'ordernow']);

Route::get("/adminpanel/edit/{id}",[mycontroller::class,"edit"]);


Route::get("/adminpanel/profile/{id}",[mycontroller::class,"profile"]);
Route::post("/adminpanel/updateadmin",[mycontroller::class,"updateadmin"]);

Route::get("/adminpanel/logout",[mycontroller::class,"logout"]);
Route::post("/adminpanel/ordersubmit",[mycontroller::class,"ordersubmit"]);

Route::post("/adminpanel/orderplace",[mycontroller::class,"orderplace"]);


Route::get("/adminpanel/dashboard",[mycontroller::class,"product"]);

Route::get("/adminpanel/sendEmail",[mycontroller::class,"sendEmail"]);

Route::get("/adminpanel/myorder",[mycontroller::class,"myorder"]);
