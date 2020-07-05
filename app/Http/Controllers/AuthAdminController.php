<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;
class AuthAdminController extends Controller
{

    public function view_login()
    {
        return view('v_auth');
    }

    public function login(Request $request)
    {
        $error = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            // dd();    
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return response()->json(['success' => 'Login Berhasil']);
            }
            else{
                return response()->json(['error' => 'Password atau Email yang anda Masukkan Salah']);
            }
        }
    
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
