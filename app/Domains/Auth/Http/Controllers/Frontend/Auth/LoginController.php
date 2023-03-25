<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use App\Domains\Auth\Models\User;
use Illuminate\Http\Request;

class LoginController
{

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }


    public function validateLogin(Request $request)
    {
        $id = $request->get('id');
        $password = $request->get('password');
        if (User::query()->where('name', $id)->where('password', $password)->exists()) {
            return redirect('/');
        } else {
            dd('로그인실패');
        }
    }
}