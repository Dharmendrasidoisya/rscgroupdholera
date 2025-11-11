<?php

namespace App\Http\Controllers\Admin\Auth; 
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use App\Models\Admin; 
use Mail; 
use Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
       public function showForgetPasswordForm()
    {
       return view('admin.auth.forgot-password');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:admins',
        ],
        [ 'email' => 'The selected email is not match.']
    
);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
      
        Mail::send('admin.email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        
        });
        $request->session()->flash('status','We have e-mailed your password reset link!');
        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm(Request $request, $token) { 
        $admin = Admin::find(1);
        // dd($admin);
        return view('admin.auth.reset-password', ['token' => $token], compact('admin'));
     }

     public function submitResetPasswordForm(Request $request)
     {
     
         $request->validate([
             'email' => 'required|email|exists:admins',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);
 
         $updatePassword = DB::table('password_resets')
                             ->where([
                               'email' => $request->email, 
                               'token' => $request->token
                             ])
                             ->first();
 
         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }
 
         $user = Admin::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_resets')->where(['email'=> $request->email])->delete();
 
         return redirect('/admin/login')->with('status', 'Your password has been changed!');
     }

}
