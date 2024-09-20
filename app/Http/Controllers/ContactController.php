<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlanType;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::all();
        return view('contact', compact('plan_types'));
    }
}
