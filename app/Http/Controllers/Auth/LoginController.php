<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()   //使用名称作为登录名
    {
        return 'name';
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

     public function adminLogin_post(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if(\Auth::attempt($credentials) && \Auth::user()->id == 1)
            {
                return redirect('/home');
            }
        return redirect(route('admin.login'));
    }
}
