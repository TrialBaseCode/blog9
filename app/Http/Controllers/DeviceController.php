<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Members;

class DeviceController extends Controller
{
    //
    function listoddata()
    {
        return Device::all();
    }
}
