<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\ConfirmationToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivateUserController extends Controller
{
    protected $redirectTo = '/dashboard';
    public function activate(ConfirmationToken $token, Request $request)
    {
        // dd($token);
        $token->user->update(['activated' => true]);
        $token->delete();

        Auth::login($token->user);
        return redirect()->intended($this->redirectPath())->withSuccess('Activated the account Successfully');
    }

    protected function redirectPath()
    {
        return $this->redirectTo;
    }
}
