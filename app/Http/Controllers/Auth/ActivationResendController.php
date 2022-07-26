<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Auth\ResendActivationCodeEvent;
use App\Http\Requests\Auth\ActivateResendRequest;

class ActivationResendController extends Controller
{
    public function index()
    {
        return view('auth.activation.resend.index');
    }
    public function store(ActivateResendRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if (optional($user)->hasNotActived()) {
            event(new ResendActivationCodeEvent($user));
        }
        return redirect()->route('login')->withSuccess('An Activation email has been sent');
    }
}
