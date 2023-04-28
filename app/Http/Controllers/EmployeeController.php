<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getData()
    {
        // return DB::table('employee')->get();
        return DB::table('employee')
        ->join('company', 'employee.id' , '=' , 'company.employee_id')
        // ->select('company.*','employee.*')
        // ->where('employee.name' , "song")
        ->where('employee.id' , 2)
        ->select('employee.name', 'company.name')
        ->get();
    }
} 
