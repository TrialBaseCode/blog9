<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getDatapi()
    {
        return ["id"=>1, "name"=>"Anil", "age"=>25];
    }
}
