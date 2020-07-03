<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $error = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()],401);
        }else{
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            $success['token'] = $user->createToken('nApp')->accessToken;
            $success['name'] = $user->name;

            return response()->json(['success' => $success],200);
           
        }
    }
    public function login(Request $request)
    {
        $error = Validator::make($request->all(),[
           
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()],401);
        }else{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $user = Auth::user();
                $success['token'] = $user->createToken('nApp')->accessToken;
                return response()->json(['success'=> $success],200);
            }else{
                return response()->json(['error' => 'Unauthorised'],401);
            }
        }
    }
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user],200);
    }
}
