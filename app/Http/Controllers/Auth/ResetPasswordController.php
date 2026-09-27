<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResetPasswordController extends Controller
{
    use ResetsPasswords {
        showResetForm as traitShowResetForm;
    }

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // The address holds the reset token and the email address, so the page's
    // own requests mustn't send it on as the Referer
    public function showResetForm(Request $request): Response
    {
        return response($this->traitShowResetForm($request))->header('Referrer-Policy', 'no-referrer');
    }
}
