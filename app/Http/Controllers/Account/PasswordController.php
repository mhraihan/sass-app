<?php

namespace App\Http\Controllers\Account;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Account\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }

    public function store(PasswordStoreRequest $request)
    {
        // dd($request->user());
        $request->user()->update(
            [
                'password' => Hash::make($request->password)
            ]
        );
        event(new PasswordReset($request->user()));
        return redirect()->route('account.index')->withSuccess('Password updated successfully');
    }
}
