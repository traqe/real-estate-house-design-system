<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlanType;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::all();

        return view('feedback', compact('plan_types'));
    }
}
