<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;



class UserController extends Controller
{
    // function index(Request $request)
    // {
    //     $user= User::where('email', $request->email)->first();
    //     // print_r($data);
    //         if (!$user || !Hash::check($request->password, $user->password)) {
    //             return response([
    //                 'message' => ['These credentials do not match our records.']
    //             ], 404);
    //         }

    //          $token = $user->createToken('my-app-token')->plainTextToken;

    //         $response = [
    //             'user' => $user,
    //             'token' => $token
    //         ];

    //          return response($response, 201);
    // }
    public $successStatus = 200;
        /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login(request $request)
    {
        if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone'=>'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
    
    public function find($id=null)
    {
        return $id?user::find($id):user::all();
        //user::where("id", $id)->get();
    }

}