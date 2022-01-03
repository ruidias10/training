<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\MyUser;
use App\Http\Controllers\API\MyUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->group(function(){

    Route::get('list', function(){
        return MyUser::list(10);
    });

    Route::post('addNewUser', [MyUserController::class, 'insert']);
});
