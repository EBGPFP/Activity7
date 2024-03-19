<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoboticsKitController;
use App\Http\Controllers\DidacticMaterialController;

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('groups', GroupController::class);
Route::resource('courses', CourseController::class);
Route::resource('robotics-kits', RoboticsKitController::class);
Route::resource('didactic-materials', DidacticMaterialController::class);
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

Route::get('/', function () {
    return view('welcome');
});
