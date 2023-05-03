<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Members;

// for validation
use Validator;

class DeviceController extends Controller
{
    //
    function listdataadd(Request $req)
    {
        $device = new Device;
        $device->name = $req->name;
        $device->member_id =$req->member_id;
        $result = $device->save();
        if($result)
        {
            return ["result"=>"Data has been saved"];
        }
        else{
            return  ["result"=>"Operation falid"];
        }

        return ["result"=>"done"];
    }
    function listdataupdate(Request $req){
         $device = Device::find($req->id);
         $device->name = $req->name;
         $device->member_id =$req->member_id;
         $result = $device->save();
         if($result)
         {
             return ["result"=>"Data has been updated"];
         }
         else{
             return  ["result"=>"Operation falid"];
         }
    }
    function listdatadelete($id){
         // for delete code
         $device = Device::find($id);
         $result = $device->delete();

         if($result)
         {
             return ["result"=>"Data has been deleted"];
         }
         else{
             return  ["result"=>"Delete Operation falid"];
         }

        // for pass delete statement
        return ["Result"=>"record has been deleted".$id];
    }
    function listdatasearch($name){
       return Device::where("name" , "like", "%" .$name."%")->get();
    }
    function listdatavalidate(Request $req)
    {
        $rules=array(
            "member_id"=>"required",
            "name"=>"required | max:4 "
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            // return $validator->errors();
             return response()->json($validator->errors(),401);
        }
        else{
            // return ["a"=>"x"];
            $device = new Device;
            $device->name=$req->name;
            $device->member_id=$req->member_id;
            $result = $device->save();

            if($result)
            {
                return ["result"=>"Data has been validated"];
            }
            else{
                return  ["result"=>"Delete Operation falid"];
            }
        }
       
    }
}

