<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated()
    {
        if(Auth::user()->role == "1")
        {
            return redirect('/admin')->with("success", "Bienvenue sur la page d'administration");
        }else if(Auth::user()->role == "0" && Auth::user()->lawyerDetail->is_premium == "1")
        {
            return redirect('/lawyer')->with("success", "مرحبا بكم في صفحة الإدارة");
        }else if(session()->get("id_client")) {
            return redirect('/client')->with("success", "مرحبا بكم في صفحة الإدارة");
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
