<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ProfileStoreRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('account.profile.index');
    }

    public function store(ProfileStoreRequest $request)
    {
        // dd($request->only('name', 'email'));
        $request->user()->update(
            $request->only('name', 'email')
        );
        return back();
    }
}
