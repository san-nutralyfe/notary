<?php

namespace Admin\Http\Controllers\Auth;

use Admin\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/Dashboard';

    public function __construct()
    {
        // $this->middle/ware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            // dd('1');
            return redirect('/Dashboard');
        }else{
            return back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout(Request $request) {
        // Session::flush();
        Auth::guard('admin')->logout();
        return redirect('/')->with('flash_message_error', 'Successfully Logged Out');
    }   
}
