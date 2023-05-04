<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileLoadController extends Controller
{
    //
    function upload(Request $req){
         // return ["result"=>"pass"];
        $result=$req->file("file")->store('apiDocs');
        return ["result"=>$result];
    }
}
