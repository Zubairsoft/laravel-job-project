<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ExperinceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProtofileController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
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

 Route::get('/home',[HomeController::class,'show'])->name('home');

 Route::get('/job',[JobController::class,'show'])->name('job');

 Route::get('/job/details',[JobDetailsController::class,'show'])->name('job_details');

 Route::get('/profile',[ProtofileController::class,'show'])->name('profile');

 Route::get('/login',[LoginController::class,'show'])->name('login');

 Route::get('/experience',[ExperinceController::class,'show'])->name('ex');

 Route::get('/skills',[SkillsController::class,'show'])->name('skills');

 Route::get('/qualification',[QualificationController::class,'show'])->name('qual');

 Route::get('/about',[AboutController::class,'show'])->name('about');

 Route::get('/contact',[ContactController::class,'show'])->name('contact');

 Route::get('/partnership',[PartnershipController::class,'show'])->name('partner');

 Route::get('/service',[ServiceController::class,'show'])->name('service');

// router dashboard
Route::get('/add_user',[UserController::class,'show'])->name('add user');
Route::get('/add_about',[AboutController::class,'showDashboard'])->name('add about');
Route::get('/add_contact',[ContactController::class,'showDashboard'])->name('add about');
Route::get('/add_courses',[CoursesController::class,'show'])->name('add courses');
Route::get('/add_qualification',[QualificationController::class,'showDashboard'])->name('add qual');
Route::get('/add_experience',[ExperinceController::class,'showDashboard'])->name('add ex');
Route::get('/add_job',[JobController::class,'showDashboard'])->name('add job');
Route::get('/add_job_detail',[JobDetailsController::class,'showDashboard'])->name('add job');
Route::get('/add_partnership',[PartnerShipController::class,'showDashboard'])->name('add partner');
Route::get('/add_post',[PostController::class,'show'])->name('add post');
Route::get('/edit_profile',[ProtofileController::class,'showDashboard'])->name('add post');
Route::get('/add_skills',[SkillsController::class,'showDashboard'])->name('add skill');
Route::get('/add_service',[ServiceController::class,'showDashboard'])->name('add service');










