<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function logout(Request $request)
    {
        try {
            $response = callApiSSO(env('API_LOGOUT_SSO'), $_COOKIE['scn_session'], env('SECRET_KEY'));
            if (200 == $response['code']) {
                Cookie::queue(Cookie::forget('sso-authen'));

                return redirect(env('URL_SERVER_SSO') . '/login?redirect_url=' . env('URL_CLIENT_SSO'));
            }

            return redirect()->back();
        } catch (\Exception $e) {
            Log::info('======================== AuthController:: logout ============================');
            Log::info($e->getMessage());
            Log::info('======================== End AuthController:: logout ============================');
            throw $e;
        }
    }
}