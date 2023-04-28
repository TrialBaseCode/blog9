<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HptreqController extends Controller
{
    //
    function testReq(Request $req){
        // echo "form submitted";
        // echo $req->input();
        return $req->input();
    }
}
