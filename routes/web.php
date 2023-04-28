<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InnerUserController;
use App\Http\Controllers\UserDatabaseController;
use App\Http\Controllers\MuserdbaseController;
use App\Http\Controllers\HtpClientController;
use App\Http\Controllers\HptreqController;
use App\Http\Controllers\FstoreController;
use App\Http\Controllers\SloginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MembercONTROLLER;
use App\Http\Controllers\MemberDataController;
use App\Http\Controllers\Members;
use App\Http\Controllers\UsermemController;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('welcome');
// });

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name'=>$name]);
// });



Route::get('/', function () {
    return view('welcome');
});

// redirect 
// Route::get('/', function () {
//     return redirect('about');
// });


Route::get('/todo', function () {
    return view('todo');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', function () {
    return view('contact');
});

// small way to write

Route::view("about" , '/about');

// for controllers

// Route::get('user', [UserController::class,'show']);
Route::get('user/{id}', [UserController::class,'show']);

// larvel 7
// Route::get("user" , "UserController@show");

Route::view("users" , '/users');

// for views

// Route::get('/vusers/{name}', function ($name) {
//     return view('vusers', ["user"=>$name]);
// });

Route::get('/vusers', function () {
    return view('vusers');
});

// loadview loadview controller

Route::get('users', [UserController::class, 'loadView']);

Route::view("innerusers" , '/innerusers');
Route::view("form" , '/form');
// Route::get("url", "file"); 
Route::post('form', [InnerUserController::class, 'formView']);
Route::view('login', 'form');
Route::view("noaccess" , '/wmiddleware');

// Group middleware

// Route::group(['middleware'=>['protectPage']], function(){
//     Route::view('musers','musers');
// });

// Route middleware

// Single route work only
Route::view('routeusers' , 'routeusers')->middleware('protectedPage');

// database work  website

Route::get("databaseusers" , [UserDatabaseController::class , 'index']);

// model database
Route::get('modelusers', [MuserdbaseController::class,'getData']);

//Https work
Route::get("apifetch" , [HtpClientController::class, 'index'] );

//Https Requests

Route::put("hreq" , [HptreqController::class , 'testReq']);
Route::view("login" , "hreq");

// flash session

Route::view('store' , 'storeuser');
Route::post('storecntrl' , [FstoreController::class , 'store'] );

// session

// Route::view('login' , 'loginses');
Route::view('profile' , 'profile');
Route::get('/logoutses' , function() {
    if(session()->has('username'))
    {
        session()->pull('username', null);
    }
     return redirect('login');
});
Route::get('/login' , function() {
    if(session()->has('username'))
    {
        return redirect('profile');
    }
     return view('loginses');
});
Route::post("usersesslogin" ,[SloginController::class, 'userworkLogin']);

Route::view('upload' , 'upload');
Route::post('upload', [UploadController::class, 'index']);
Route::get('list', [MembercONTROLLER::class, 'show']);

Route::post('add',[MemberDataController::class, 'addData']);
Route::view('add','addmember');

Route::get('listData',[MemberDataController::class, 'listData']);
Route::get('delete/{id}',[MemberDataController::class, 'deleteData']);
Route::get('edit/{id}',[MemberDataController::class, 'showData']);
Route::post('edit',[MemberDataController::class, 'update']);




Route::get("listwork" ,[Members::class,'operations']);

Route::get('crlist', [UsermemController::class, 'operation' ] );

Route::get('jlist', [EmployeeController::class, 'getData' ] );

// Assesor

Route::get('member' ,[MemberDataController::class, 'listindex']);

//mutator

Route::get('mumember' ,[MemberDataController::class, 'muterindex']);