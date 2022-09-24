<?php

namespace App\Http\Controllers;

use App\Models\rating;
use App\Models\reviewstore;
use Validator;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //

    function list($id = null)
    {
        return $id ? rating::find($id) : rating::all();
    }
    function add(Request $Req)
    {
        $rating = new rating;
        $rating->Rev_Rate = $Req->Rev_Rate;
        $rating->user_name = $Req->user_name;
        $rating->Rev_Desc = $Req->Rev_Desc;
        $rating->Equip_ID = $Req->Equip_ID;
        $rating->User_ID = $Req->User_ID;
        $result = $rating->save();
        if ($result) {
            return ["result" => "done"];
        } else {
            return ["result" => "not done"];
        }
    }
    function update(Request $Req)
    {
        $rating = rating::find($Req->id);
        $rating->Rev_Rate = $Req->Rev_Rate;
        $rating->user_name = $Req->user_name;
        $rating->Rev_Desc = $Req->Rev_Desc;
        $rating->Equip_ID = $Req->Equip_ID;
        $rating->User_ID = $Req->User_ID;
        $result = $rating->save();
        if ($result) {
            return ["result" => "done"];
        } else {
            return ["result" => "not done"];
        }
    }
    function delete($id)
    {
        $rating = rating::find($id);
        $result = $rating->delete();
        if ($result) {
            return ["result" => "done"];
        } else {
            return ["result" => "not done"];
        }
    }
    function search($id)
    {
        return rating::where("id", $id)->get();
    }


    function testData(Request $req)
    {
        $rules = array(
            "Equip_ID" => "required | Max:4",
            "Rev_Desc" => "required"
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),401);
        } else {
            $rating = new rating;
            $rating->Equip_ID = $req->Equip_ID;
            $rating->Rev_Desc = $req->Rev_Desc;
             $result=$rating->save();
             if ($result) {
                return ["result" => "done"];
            } else {
                return ["result" => "not done"];
            }   
        }
    }
}
