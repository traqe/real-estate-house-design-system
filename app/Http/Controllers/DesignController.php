<?php

namespace App\Http\Controllers;

use App\Mail\QuoteForDesign;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DesignController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::all();

        return view('design', compact('plan_types'));
    }

    public function postDesign(Request $request){

            $data = request(['name','email','phone','description']);

            Mail::to('tnrwatida@gmail.com')->send(new QuoteForDesign($data));

            return redirect()->route('design.index')->with('success', 'You have sucessfully sent a request');
    }
}
