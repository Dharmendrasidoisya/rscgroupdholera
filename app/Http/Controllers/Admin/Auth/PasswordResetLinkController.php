<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class PasswordResetLinkController extends Controller
{
    public function index(){
        $profile = Admin::find(1);
        // dd($profile);
        return view('backend.showprofile.index',compact('profile'));
    }
}
