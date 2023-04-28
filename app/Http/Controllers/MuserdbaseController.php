<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MuserdbaseController extends Controller
{
    //All data show 
    function getData()
    {
        return User::all();
    }
}
