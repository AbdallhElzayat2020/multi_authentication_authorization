<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function login(Request $request)
    {
        return view('frontend.auth.login');
    }

    public function forgotPassword(Request $request)
    {
        return view('frontend.auth.forgot-password');
    }

}
