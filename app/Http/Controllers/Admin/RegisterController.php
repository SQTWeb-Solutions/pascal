<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Session;

use App\Jobs\SendAdminVerificationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'role' => 'admin',
            'password' => bcrypt($data['password']),
            'verified' => false
        ]);
    }
    /* * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
  // public function register(Request $request)
   //{
    //$this->validator($request->all())->validate();
    //event(new Registered($user = $this->create($request->all())));
    //$this->guard()->login($user);
    //Session::flash('success','Admin Account Created Successfully');
    //return $this->registered($request, $user)
      //            ?: redirect($this->redirectPath());
   //}

   /**
    * Show the application registration form.
    *
    * @return \Illuminate\Http\Response
    */
   public function showRegistrationForm()
   {
       return view('admin.auth.register');
   }
   /**
    * Show the application registration form.
    *
    * @return \Illuminate\Http\Response
    */
  public function confirmRegistration()
   {
       return view('admin.auth.confirm');
   }



   /**
    * The user has been registered.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  mixed  $user
    * @return mixed
    */
   protected function registered(Request $request, $user)
   {
     $this->guard()->logout();
     Session::flash('success','Admin Account Created Successfully, Please Check your Email Address for Verification Link');
     return redirect('/admin/login');
   }
    /**
    * Get the guard to be used during registration.
    *
    * @return \Illuminate\Contracts\Auth\StatefulGuard
    */
     protected function guard()
     {
         return Auth::guard('admin');
     }
}
