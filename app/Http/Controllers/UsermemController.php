<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class UsermemController extends Controller
{
    //
    function operation()
    {
    //    echo "code will rfgre be here";

    //    return  DB::table('members')->get();

    //    return  DB::table('members')->sum('id');

     //    return  DB::table('members')->avg('id');

    //   return  DB::table('members')->min('id');

    //   return  DB::table('members')->max('id');

    //    return  DB::table('members')->max('name');

          return  DB::table('members')->min('name');

    }
}
