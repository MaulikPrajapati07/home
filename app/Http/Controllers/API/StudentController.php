<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Carbon\Carbon;
use Spatie\FlareClient\Api;

class StudentController extends Controller
{
    //
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
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function logint(Request $request)
    {
        //if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
        $student = Auth::guard('api')->user();
        //$student = student::where('phone', $request)->first();

        //otp create
        // return student::create([
        //'phone' => $user->id,
        $phone_otp = rand(000000, 999999);
        // 'id' => $user->id

        // log::info(message:"phone_otp=".$phone_otp);
        student::where('id', $student->id)->update(['phone_otp' => $phone_otp]);
        //return response()->json([$student], status: 200);
        $success['token'] =  $student->createToken('MyApp')->accessToken;

        //and send

        $success['full_name'] =  $student->full_name;
        return response()->json(['success' => $student]);
        // }
    }
    // public function login1(request $request)
    // {
    //     Log::info($request);
    //     $student = student::where([['phone','=',Request(key:'phone')],['phone_otp','=',request(key:'phone_otp')]])->first();
    //     if($student){
    //         Auth::login($student,remember:true);
    //         student::where('phone','=',$request->phone)->update(['phone_otp'=>null]);
    //         //return view(view: 'home');

    //     }
    //     else{
    //         return Redirect::back();
    //     }
    // }
    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'phone'=>'required',
    //         'password' => 'required',
    //         'c_password' => 'required|same:password',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 401);
    //     }
    //     $input = $request->all();
    //     $input['password'] = bcrypt($input['password']);

    //     $user = User::create($input);

    //     $success['token'] =  $user->createToken('MyApp')->accessToken;
    //     $success['name'] =  $user->name;
    //     return response()->json(['success' => $success], $this->successStatus);
    // }

    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */


    public function find($id = null)
    {
        return $id ? student::find($id) : student::all();
        //user::where("id", $id)->get();
    }

    public function sendOtp(request $request)
    {
        // $otp = rand(1000,9999);
        // log::info(message:"otp=".$otp);
        // $student =student::where('phone','=',$request->phone)->update(['otp'=>$otp]);
        // return response()->json([$student],status:200);
        if (Auth::attempt(['phone_otp' => request('phone_otp'), 'password' => request('password')])) {
            $student = Auth::User();
            //$success['token'] =  $student->createToken('MyApp')-> accessToken; 
            return response()->json(['success'], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    public function generateOtp(request $request)
    {
        $user = Student::where('phone', $request)->first();

        # User Does not Have Any Existing OTP
        $request = Student::where('id', $user->id)->latest()->first();

        $now = Carbon::now();

        // if($verificationCode && $now->isBefore($verificationCode->expire_at)){
        //     return $verificationCode;
        // }

        // Create a New OTP
        return student::create([
            'id' => $user->id,
            'phone_otp' => rand(100000, 999999),
            //'expire_at' => Carbon::now()->addMinutes(10)
        ]);
        return response()->json(['success'], $this->successStatus);
    }
    public function register1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'notifications' => 'required',
            'password' => 'required',
        ]);
        //return response()->json(['success' => $success], $this->successStatus);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $student = student::create($input);

        $success['token'] =  $student->createToken('MyApp')->accessToken;
        $success['full_name'] =  $student->full_name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function detailsM()
    {
        $student = Auth::User();
        return response()->json(['success' => $student], $this->successStatus);
    }

    public function loginWithOtp(Request $request)
    {
        $student = Auth::guard('api')->user();
        #Validation
        $request->validate([
            'phone' => 'required|exists:students,phone',
            'phone_otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode = student::where($request->id)->where('phone_otp', $request->phone_otp)->first();

        // $now = Carbon::now();
        if ($verificationCode >= 'id') {
            // student::where($request->id)->first();
            $success['token'] =  $student->createToken('MyApp')->accessToken;

            //and send

            $success['full_name'] =  $student->full_name;
            return response()->json(['success' => $verificationCode]);
        } else {
            return response()->json(['error' => 'Invalid OTP']);
        }
        // return redirect()->json(['error' => $verificationCode->errors()], 401);

        // }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
        //    // return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
        // }
        // if($user){
        //     // Expire The OTP
        //     $verificationCode->update([
        //         'expire_at' => Carbon::now()
        //     ]);

        //     Auth::login($user);

        //     //return redirect('/home');
        // }

        //return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');


    }
}
