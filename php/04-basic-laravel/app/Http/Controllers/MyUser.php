<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser as MyUserModel;

class MyUser extends Controller
{
    public function addNewUser() {
        return view('user.signup');
    }

    public function signup(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:5"
        ]);

        MyUserModel::newUser($request);

        return view('user.success');
    }
}
