<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
//use App\Models\Mail;

class ForgotPasswordController extends Controller
{
    public function getEmail()
    {

       return view('frontends.auth.forgotpassword');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:frontendlogins',
        ]);
        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('frontends.auth.reset_password',['token' => $token], function($message) use ($request) {
                  $message->from($request->email);
                  $message->to('chitrachavhan777@gmail.com');
                  $message->subject('Reset Password Notification');
               });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
}
     /* public function forgot()
    {
        $credentials = request()->validate(['email'=>'required|email']);
        password::sendResetLink($credentials);
        return $this->respondWithMessage(msg: "Reset Password Link send on your email id.");

    }
    public function reset()
    {
        $credentials = request()->validate([
            'email'=>'required|email',
            'password' => 'required|string|max:25|confirmed',
            'token' => 'required|string'
        ]);

        $email_password_status =Password::reset($credentials, function($user,$password) {
        $user->password =$password;
        $user->save();
        });
        if ($email_password_status == Password::INVALID_TOKEN) {
            return $this->respondBadRequest(api_code ApiCode::INVALID_RESET_PASSWORD_TOKEN);
        }
        return $this->respondWithMessage(msg:"Password successfully");
    }*/
   

