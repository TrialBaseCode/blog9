<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;


class MembercONTROLLER extends Controller
{
    //
    function show(){
        // return "hello form Membercontroller";
        // return view('list');
        // return Members::all();
        $data= Members::paginate(5);
        return view('list', ['members'=>$data]);
    }
}
