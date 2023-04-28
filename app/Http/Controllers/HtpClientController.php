<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;

class HtpClientController extends Controller
{
    //
    function index(){
        // echo "apicall be here";
        // return Http::get("https://dummyjson.com/users");
        $data =  Http::get("https://dummyjson.com/users");
        return view('apifetch' , ['collection'=>$data['users']]);
    }
}
