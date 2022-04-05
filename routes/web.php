<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperinceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ProtofileController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Routing for display project pages

 Route::get('/home',[HomeController::class,'show']);

 Route::get('/job',[JobController::class,'show']);

 Route::get('/job/details',[JobDetailsController::class,'show']);

 Route::get('/profile',[ProtofileController::class,'show']);

 Route::get('/login',[LoginController::class,'show']);

 Route::get('/experience',[ExperinceController::class,'show']);

 Route::get('/skills',[SkillsController::class,'show']);

 Route::get('/qualification',[QualificationController::class,'show']);

 Route::get('/about',[AboutController::class,'show']);

 Route::get('/contact',[ContactController::class,'show']);

 Route::get('/partnership',[PartnershipController::class,'show']);

 Route::get('/service',[ServiceController::class,'show']);




