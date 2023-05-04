<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberApiController;
use App\Http\Controllers\SacUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  use sctrum

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::apiResource("AllMember", MemberApiController::class);
    Route::post("Listadd" , [DeviceController::class,'listdataadd']);
    Route::put("Listupdate" , [DeviceController::class,'listdataupdate']);
    Route::delete("Listdelete/{id}" , [DeviceController::class,'listdatadelete']);
    Route::get("Listsearch/{name}" , [DeviceController::class,'listdatasearch']);
    Route::post("Listvalidate" , [DeviceController::class,'listdatavalidate']);
});





// user sactum

Route::post("saclogin",[SacUserController::class,'index']);