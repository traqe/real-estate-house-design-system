<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Feedback;
use App\Models\PlanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::all();

        return view('feedback', compact('plan_types'));
    }

    public function postFeedback()
    {
        $data = request(['first','last','email','message']);

        Mail::to('tnrwatida@gmail.com')->send(new Feedback($data));

        return redirect()->route('feedback')->with('success', 'Feedback sent sucessfully');
    }
}
