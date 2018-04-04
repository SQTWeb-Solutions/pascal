<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Admin, AdminVerification};

use Auth;

use App\Events\AdminRequestVerificationEmail;

class VerificationController extends Controller
{
    public function verify(AdminVerification $token)
    {
      $token->user()->update([
    		'verified' => true
    	]);

    	$token->delete();

    	//Auth::login($token->user);

    	return redirect(route('admin.login'))->withInfo('Email verification successful. Please login again');
    }

    public function resend(Request $request)
    {
      $user = Admin::byEmail($request->email)->firstOrFail();

        if($user->hasVerifiedEmail()) {
            return redirect(route('admin.dashboard'))->withInfo('Your email has already been verified');
        }

        event(new AdminRequestVerificationEmail($user));

        return redirect(route('admin.login'))->withInfo('Verification email resent. Please check your inbox');
    }
}
