<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FstoreController extends Controller
{
    //
    function store(Request $req)
    {
        // return $req->input();
        // we heve to store the username 
        $data =  $req->input('username');
        $req->session()->flash('username' , $data);
        // return view('') // for same page
        return redirect('store');
    }
}
