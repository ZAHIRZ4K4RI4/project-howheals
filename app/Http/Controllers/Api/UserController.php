<?php

// namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\User;

// class UserController extends Controller
// {
//     public function register(Request $request)
//     {
//     $validateData = $request->validate([
//         'name' => 'required|max:25',
//         'email' => 'email|required|unique:users',
//         'password' => 'required|confirmed',
//     ]);

//     $user = new user([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => bcrypt($request->password)
//     ]);
//     $user->save();
//     return response()->json($user, 201);
//    }
//   public function login(Request $request)
//     {
//     $validateData = $request->validate([
//         'email' => 'email|required',
//         'password' => 'required',
//     ]);
 

//     $login_detail = request(['email', 'password']);

//     if (!Auth:: attemp($login_detail)) {
//         return response()->json(['error' => 'Login Failed, Please Check Your Login Detail'],401);
//     }
//         $user = $request->user();

//         $tokenResult = $user->createToken('AccessToken');
//         $token = $tokenResult->token;
//         $token->save();

//         return response()->json([
//             'access_token' => 'Bearer'. $tokenResult->accessToken,
//             'token_id' => $token->id,
//             'user_id' => $user->id,
//             'name' => $user->name,
//             'email' => $user->email,
//         ], 200);
//    } 

// }