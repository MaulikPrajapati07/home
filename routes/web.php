<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController ;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\View\Components\Input;
use App\Models\reviewstore;


// use League\CommonMark\Node\Block\Document;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/',[DemoController::class,'index']);
route::get('/about','App\Http\Controllers\DemoController@about');
route::get('/course',singleActionController::class);

route::resource('/Photo', PhotoController::class);
route::get('/register',[RegistrationController ::class,'index']);
route::get('/reviews ',[RegistrationController ::class,'index1']);
route::post('/reviewstores',[RegistrationController ::class,'reviewstore'])->name('reviewstores');


route::get('/register/create/{id}',[RegistrationController::class,'create'])->name('register.create');
route::get('/register/delete/{id}',[RegistrationController::class,'delete'])->name('register.delete');
route::get('/register/edit/{id}',[RegistrationController::class,'edit'])->name('register.edit');
route::get('/register/update/{id}',[RegistrationController::class,'update'])->name('register.update');
route::get('/register/view',[RegistrationController::class,'view']);
route::post('/register',[RegistrationController::class,'store'])->name('register.user');
route::get('/customer',function(){
    $customer = Customer::all();
    echo "<pre>";
    print_r($customer->toArray());
});



// route::get('/about','DemoController@about')                                                              

// Route::get('/', function () {
//     return view('welcome');
// // });
// Route::get('/', function(){
// return view('layouts.home');
// });

// Route::get('/about', function(){
//      return view('layouts.about');
//      });

//      Route::get('/course', function(){
//           return view('layouts.course');
//           });
          
     

Route::get('/demo/name', function ($name) {
    
     echo $name;
});
Route::get('/demo', function () {
echo "hello?    ";
});

//  Route::get('/test/{name}/{id?}', function ($name,$id=null) {
//  $data = compact('name','id');
//  return view('hello')->with($data);
//     });
    
