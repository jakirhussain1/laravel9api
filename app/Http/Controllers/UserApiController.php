<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    function users ($id=null)
    {
        if($id=="")
        {
            $users = User::get();
            return response()->json(["users"=>$users],200);
        }else{
            $user = User::find($id);
            return response()->json(["user"=>$user],200);
        }
    }
}
