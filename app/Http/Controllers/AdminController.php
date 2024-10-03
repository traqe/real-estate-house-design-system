<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin-login');
    }

    public function postLogin()
    {
        $admins = Admin::all();
        $plan_types = PlanType::all();

        $email = request('email');
        $password = request('password');

        foreach($admins as $admin) {
            if($email == $admin->email && $password == $admin->password) {
                return view('admin', ['plan_types' => $plan_types]);
            }
            else{
                return redirect()->route('admin.login')->with('error', 'Wrong Login Credentials');
            }
        }
    }

    public function storePlan(Request $request)
    {

        $plan = new Plan();
        $plan->area = request('area');
        $plan->bedrooms = request('bedrooms');
        $plan->bathrooms = request('bathrooms');
        $plan->garages = request('garages');
        $plan->plan_type = request('plan_type');
        $plan->description = request('description');

        // add image to the database
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('images', $imageName, 'public');

            // Save the image name in the database
            $plan->image_url = $imageName;

        }
        $plan->save();

        $plan_types = PlanType::all();

        return view('admin', compact('plan_types'));
        // to view the image in the view ->>> <img src="{{ asset('storage/images/' . $model->image_url) }}" alt="Image">
    }
}
