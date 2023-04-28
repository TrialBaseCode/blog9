<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function show($id)
    // {
    //     return "Hello from controller";
    // }
    function show($id)
    {
        return $id;
    }
    function loadView()
    {
     //   return view("users");
    //  return view("users" , ["users"=>'anil']);
    // return view("users" , ["names"=>['anil' , 'bruce' , 'silpa']]);
    // return view("users" , ["names"=>'sam']);
    $data=['anil','sam','tonny'];
    return view("users" , ["names"=>$data]);
    }
}
