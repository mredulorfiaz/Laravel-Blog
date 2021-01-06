<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }
    public function store(Request $request){
        // validation
        $this->validate($request, 
        [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'email|required',
            'password' => 'required|confirmed'
        ]

    );
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'username' => $request->username

    ]);


    }
}
