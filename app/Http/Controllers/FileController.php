<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $Req)
    {
        //return "jesjkd";
        $result= $Req->file('file')->store('apiDocs');
        return ['result'=>$result];
    }
}
