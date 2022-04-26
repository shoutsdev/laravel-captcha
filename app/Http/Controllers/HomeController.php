<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function myCaptcha()
    {
        return view('captcha');
    }

    public function myCaptchaPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
            ['captcha.captcha' => 'Invalid captcha code.']);
        dd("You are here :) .");
    }

    public function refreshCaptcha(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
