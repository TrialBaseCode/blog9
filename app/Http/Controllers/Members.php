<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    function operations()
    {
        // echo "Code will be here";
        // return DB::table('members')->get();

        // $data= DB::table('members')->get();
        // return view('listwork' , ['data'=>$data]);

        // return DB::table('members')
        // ->where('name' , 'tutu' )
        // ->get();
        
        // return(array) DB::table('members')->find(4);

        // return DB::table('members')->count();

        // return DB::table('members')
        // ->insert([
        //     'name'=>'anila',
        //     'email'=>'anila@lest.com',
        //     'address'=>'UKA'
        // ]);


        // return DB::table('members')
        // ->where('id', 27)->delete();

        return DB::table('members')
        ->where('id', 20)
        ->update([
          'name'=>'sila',
          'email'=>'sila@gmail.com',
          'address'=>'MK'
        ]);
    }
}
