<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use App\Http\Middleware\Auth ;

class AdminLoginController extends Controller
{


//    public function __conctruct()
//    {
//        $this->middleware('guest:admin');
//    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
           'email'    => 'required|email',
           'password' => 'required|min:8'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
