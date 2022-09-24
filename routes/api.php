<?php

use App\Http\Controllers\dummyAPI;
use Illuminate\Http\Request;
//use Validator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\FileController;
use Faker\Core\File;
use App\Http\Controllers\API\PropertieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("list/{id?}",[dummyAPI::class,'list']);
Route::post("add",[dummyAPI::class,'add']);
Route::post("update",[dummyAPI::class,'update']);
Route::delete("delete/{id}",[dummyAPI::class,'delete']);
Route::get("search/{id}",[dummyAPI::class,'search']);
Route::post("validate",[dummyAPI::class,'testData']);
route::apiResource("member",MemberController::class);
Route::post("login",[UserController::class,'index']);
Route::post("upload",[FileController::class,'upload']);
// Route::post('login', 'App\Http\Controllers\API\UserController@login');
// Route::get('find/{id?}', 'App\Http\Controllers\API\UserController@find');
// Route::post('register', 'App\Http\Controllers\API\UserController@register');
// //Route::post('register', [API\UserController::class,'register']);
// Route::group(['middleware' => 'auth:api'], function(){
// Route::post('details', 'App\Http\Controllers\API\UserController@details');
// });
Route::post('logint', 'App\Http\Controllers\API\StudentController@logint')->middleware('auth:api');
Route::post('sendOtp', 'App\Http\Controllers\API\StudentController@sendOtp')->middleware('api');
Route::post('loginWithOtp', 'App\Http\Controllers\API\StudentController@loginWithOtp')->middleware('api');
Route::post('generateOtp', 'App\Http\Controllers\API\StudentController@generateOtp');
Route::get('finds/{id?}', 'App\Http\Controllers\API\StudentController@finds');
Route::post('register1', 'App\Http\Controllers\API\StudentController@register1');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('detailsM', 'App\Http\Controllers\API\StudentController@detailsM');});
Route::post('find/{id?}', 'App\Http\Controllers\API\PropertieController@find')->middleware('auth:api');
Route::post("index",[PropertieController::class,'index']);
Route::post("food",[PropertieController::class,'food']);
Route::post("shortList",[PropertieController::class,'shortList']);