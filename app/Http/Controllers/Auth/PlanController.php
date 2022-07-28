<?php

namespace App\Http\Controllers\Auth;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::active()->forUsers()->get();

        return view('subscription.plans.index')->with('plans', $plans);
    }
}
