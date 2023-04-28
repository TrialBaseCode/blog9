<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SloginController extends Controller
{
    //
    function userworkLogin(Request $req)
    {
    //    return  $req->input();
    $data = $req->input('username');
    $req->session()->put('username', $data);
    // echo session('username');
    return redirect('profile');
    }

}
