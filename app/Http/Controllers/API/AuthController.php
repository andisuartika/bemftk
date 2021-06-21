<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'massage' => 'Unauthorized'
            ],401);
        }
        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'massage' => 'Success',
            'user' => $user,
            'token' => $token,
        ],200);
       
    }

    public function logout(Request $request){

        $user = $request->user();
        $user->currentAccessToken()->delete();
        return response()->json([
            'massage' => 'Berhasil Logout',
        ],200);
    }
}
