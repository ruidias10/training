<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MyUser extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';
    protected $table = 'Users';

    public static function list(int $limit) {
        $sql = self::select([
            "id",
            "name",
            "email",
            "password",
            "created_at"
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function newUser(Request $request) {
        $sql = self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "created_at" => new Carbon()
            //"created_at" => DB::raw("NOW()")
        ]);

        dd($sql->toSql(), $request->all());
    }

}
