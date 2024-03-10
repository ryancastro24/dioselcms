<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function registerSave(Request $request){


        Validator::make($request->all(), [
            'name' =>  'required',
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();


        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),   
        ]);


    return redirect()->route('admin');
        
    }
}
