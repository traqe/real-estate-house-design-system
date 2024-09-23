<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactClient;
use App\Models\PlanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::all();
        return view('contact', compact('plan_types'));
    }

    public function postContact(Request $request)
    {
        $data = request(['first','last','email','message']);

        Mail::to('tnrwatida@gmail.com')->send(new ContactClient($data));

        return redirect()->route('contact')->with('success', 'You successfully sent your message');
    }
}
