<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

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
    protected $redirectTo = '/';

    /**
    * Show the application's login form.
    *
    * @return \Illuminate\Http\Response
    */
     public function showLoginForm()
     {
         return view('admin.auth.login');
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    //protected function authenticated(Request $request, $user)
    //{
        //
    //}


    protected function authenticated(Request $request, $user)
    {
        if(!$user->hasVerifiedEmail()) {
            $this->guard()->logout();

            return redirect('/admin/login')
                ->withError('Please activate your account. Trouble Getting Verification Email, <a href="' . route('admin.verify.resend') . '?email=' . $user->email .'">Resend?</a>');
        }
        Session::flash('success','Welcome Back, '.$user->firstname);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        Session::flash('success','Account Logged Out Successfully');

        return redirect('/admin/login');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }


}
