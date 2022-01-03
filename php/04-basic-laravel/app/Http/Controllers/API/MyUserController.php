<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyUser;

class MyUserController extends Controller
{
    public function insert(Request $request){
        $result = MyUser::newUser($request);

        if ($result) {
            return response("Ok", 200);
        }

        return response("Error", 409);
    }
}
