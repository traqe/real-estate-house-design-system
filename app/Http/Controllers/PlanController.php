<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        $plan_types = PlanType::all();

        return view('plans', compact('plans', 'plan_types'));
    }

    public function show($id)
    {
        $plans = Plan::where('plan_type', $id)->get();

        $plan_type = PlanType::findOrFail($id);
        $plan_types =  PlanType::all();

        return view('plan', ['plans' => $plans, 'plan_type' => $plan_type, 'plan_types' => $plan_types]);
    }

    public function eachPlan($id)
    {
        $plan = Plan::findOrFail($id);
        $plan_type = PlanType::findOrFail($plan->plan_type);
        $plan_types = PlanType::all();

        return view('show-plan', compact('plan', 'plan_types', 'plan_type'));
    }
}
