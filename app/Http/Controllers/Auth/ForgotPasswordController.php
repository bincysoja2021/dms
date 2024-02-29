<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function reset_password()
    {
      return view('admin.password_reset.reset_password');
    }

    public function forgot_password()
    {
      return view('admin.password_reset.forgot_password');
    }
    public function forgot_password_otp()
    {
      return view('admin.password_reset.forgot_password_otp');
    }
}
