<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'status'=>200,
            'message'=>'Successfully User Created',
            'data'=> $user,
            'token'=> $token
        ],200);
    }

    public function Userlogin(Request $request){
        // echo 'test'; die();

        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
       

        $user = User::where('email', $request['email'])->first();
        if ($user) {
            if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                return response()->json([
                    'status' => 400,
                    'message' => 'password is invalid', 
                    'data' => []
                ], 400);
            } else {
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'status'=>200,
                    'message'=>'login successfully',
                    'data'=>$user,
                    'token'=>$token
                ],200);
            }
        }
    }
}
