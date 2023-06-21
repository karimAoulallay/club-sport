<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [StaticController::class, 'index']);
Route::get('/activities', [StaticController::class, 'activities']);
Route::get('/about', [StaticController::class, 'about']);
Route::get('/plans', [StaticController::class, 'plans']);

// Show register form
Route::get('/users/register', [UserController::class, 'register'])->middleware('guest');

// Store user data
Route::post('/users', [UserController::class, 'store']);

// Log out user
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/users/login', [UserController::class, 'login'])->middleware('guest')->name('login');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// User profile
Route::get('/users/{user}/profile', [UserController::class, 'profile'])->middleware('auth');

// Edit user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');

// Update user
Route::put('/users/{user}', [UserController::class, 'update'])->middleware('auth');

// ----------------------------------------- Dashboard Index

// Show Admin Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'is_admin']);


// ----------------------------------------- Members Routes

// Show members list
Route::get('/admin/dashboard/members', [MembersController::class, 'index'])->middleware(['auth', 'is_admin']);

// delete user
Route::delete('/admin/dashboard/{user}', [MembersController::class, 'destroy'])->middleware(['auth', 'is_admin']);

// ----------------------------------------- Members Routes


// Show activities list
Route::get('/admin/dashboard/activities', [ActivitiesController::class, 'index'])->middleware(['auth', 'is_admin']);

// Show activities Form
Route::get('/admin/dashboard/activities/create', [ActivitiesController::class, 'create'])->middleware(['auth', 'is_admin']);

// Store activities Data
Route::post('/admin/dashboard/activities', [ActivitiesController::class, 'store'])->middleware(['auth', 'is_admin']);

// Show Edit Activity Form
Route::get('/admin/dashboard/activities/{id}/edit', [ActivitiesController::class, 'edit'])->middleware(['auth', 'is_admin']);

// Update Activity
Route::put('/admin/dashboard/activities/{id}', [ActivitiesController::class, 'update'])->middleware(['auth', 'is_admin']);

// Delete Activity
Route::delete('/admin/dashboard/activities/{id}', [ActivitiesController::class, 'destroy'])->middleware(['auth', 'is_admin']);


// ----------------------------------------- Plans Routes

// Show Plans list
Route::get('/admin/dashboard/plans', [PlansController::class, 'index'])->middleware(['auth', 'is_admin']);

// Show Create Form
Route::get('/admin/dashboard/plans/create', [PlansController::class, 'create'])->middleware(['auth', 'is_admin']);

// Store Plan Data
Route::post('/admin/dashboard/plans', [PlansController::class, 'store'])->middleware(['auth', 'is_admin']);

// Show Create Form
Route::delete('/admin/dashboard/plans/{plan}', [PlansController::class, 'destroy'])->middleware(['auth', 'is_admin']);

// Show Edit Form
Route::get('/admin/dashboard/plans/{plan}/edit', [PlansController::class, 'edit'])->middleware(['auth', 'is_admin']);

// Update Plan
Route::put('/admin/dashboard/plans/{plan}', [PlansController::class, 'update'])->middleware(['auth', 'is_admin']);
