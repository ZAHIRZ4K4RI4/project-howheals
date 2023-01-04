<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
    $validateData = $request->validate([
        'name' => 'required|max:55',
        'email' => 'email|required|unique:users',
        'password' => 'required|confirmed'
    ]);

    $validateData['password'] = Hash::make($request->password);

    $user = User::create($validateData);
 
    return response()->json($user, 201);
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'localhost:8000/api/register',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $login_detail = request(['email', 'password']);
        if (!Auth:: attempt($login_detail)) {
            return response()->json(['error' => 'Login Failed, Please Check Your Login Detail'],401);
        }
        $user = $request->user();
        $token = $user->createToken("auth_token")->plainTextToken;
        $user->$token = $token;

            return response()->json($user, 201);
        }
    }
