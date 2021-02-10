<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required|max:30',
            'email'=>'required|unique:users,email',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'year'=>$request->year,
            'month'=>$request->month,
            'day'=>$request->day,
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect('/home');

    }
}
