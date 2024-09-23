<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\QuoteForPlan;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function postQuote(Request $request)
    {
        $plan = Plan::findOrFail(request('plan_id'));
        $plan_type = PlanType::findOrFail($plan->plan_type);
        $data = request(['name','email','phone']);
        array_push($data, $plan, $plan_type);
        //dd($data);
        Mail::to('tnrwatida@gmail.com')->send(new QuoteForPlan($data));

        return redirect()->route('plans.show', $plan->id)->with('success', 'You have sucessfully sent a request');
    }
}
