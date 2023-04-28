<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// imort
use Illuminate\Support\Facades\DB;


class UserDatabaseController extends Controller
{
    //
    function index()
    {
        // echo DB::select("select * from users") ;
        return DB::select("select * from users") ;
    }
}
