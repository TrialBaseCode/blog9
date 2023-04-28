<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InnerUserController extends Controller
{
    //
    function formView(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:5'
        ]);

        return $req->input();
    }
}
