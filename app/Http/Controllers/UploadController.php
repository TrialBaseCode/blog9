<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req){
        // return "Hello to controller";
        return $req->file('file')->store('img');
    }
}
