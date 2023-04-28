<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MemberDataController extends Controller
{
    //
    function listData(){
        // return view('deletedatalist' );
        $data= Members::all();
        return view('deletedatalist', ['members'=>$data]);
    }
    function deleteData($id){
        $data = Members::find($id);
        $data->delete();
        return redirect('listData');
    }
    function showData($id){
        // return Members::find($id);
        $data=Members::find($id);
        return view('edit', ['data'=> $data]);
    }
    function update(Request $req)
    {
        $data= Members::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->save();
        return redirect('listData');
    }
    function  listindex() {
       return Members::all();
    }
    function muterindex(){
        $membernew = new Members;
        $membernew->name="Raju";
        $membernew->email="raj123@gmail.com";
        $membernew->address="vyhgiy,lglug";
        $membernew->save();
    }
}
