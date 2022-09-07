<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

     public function __construct()
    {
        $this->middleware('guest')->except('logout');


     }

    protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('SuperAdmin')){

             return redirect('/superAdmin_dashboard');

        }
        if($user->hasRole('admin')){

             return redirect('/admin_dashboard');
        }
        if($user->hasRole('user')){

             return redirect('/home');

        }
    }

}
