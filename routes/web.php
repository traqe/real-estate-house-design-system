<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Models\Admin;
use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $plans = Plan::orderBy('created_at', 'desc')->paginate(6);
    //dd($plans);
    $plan_types = PlanType::all();

    $plans_available = Plan::all();

    return view('index', compact('plans', 'plan_types', 'plans_available'));
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

// design & construction routes
Route::get('design', [DesignController::class, 'index'])->name('design.index');
Route::post('postDesign', [DesignController::class, 'postDesign'])->name('postDesign');

//about us
Route::get('about', function() {

    $plan_types = PlanType::all();

    return view('about', ['plan_types' => $plan_types]);
})->name('about');

