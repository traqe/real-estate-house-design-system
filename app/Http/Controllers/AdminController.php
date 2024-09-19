<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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

        $email = request('email');
        $password = request('password');

        foreach($admins as $admin) {
            if($email == $admin->email && $password == $admin->password) {
                return view('admin');
            }
            else{
                return redirect()->route('admin.login')->with('error', 'Wrong Login Credentials');
            }
        }
    }
}
