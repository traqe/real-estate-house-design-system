<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Models\Admin;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $plans = Plan::orderBy('created_at', 'desc')->get();
    //dd($plans);
    $plan_types = PlanType::all();

    return view('index', compact('plans', 'plan_types'));
})->name('home');

//feedback route
Route::get('feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('postFeedback', [FeedbackController::class, 'postFeedback'])->name('postFeedback');

//contact route
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('postContact', [ContactController::class, 'postContact'])->name('postContact');

// plan routes
Route::get('each_plan/{id}', [PlanController::class, 'eachPlan'])->name('each.plan');
Route::get('plans/{id}', [PlanController::class, 'show'])->name('plans.show');
Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
Route::post('postQuote', [PlanController::class, 'postQuote'])->name('postQuote');

// admin routes
Route::get('admin_login', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('admin_login', [AdminController::class, 'postLogin'])->name('admin');
Route::post('admin', [AdminController::class, 'storePlan'])->name('admin_plan');

