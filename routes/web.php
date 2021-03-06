<?php

use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AppointmentReplyController;
use App\Http\Controllers\User\AppointmentController;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $services = Service::get(['service_name', 'service_image', 'service_short_description']);
    $doctors = Doctor::all();
    $blogs = Blog::latest()->take(6)->get();
    return view('user.index', compact('services', 'doctors','blogs'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user_appointment', AppointmentController::class)->middleware('auth');
Route::get('/about', [App\Http\Controllers\User\UserDashboardController::class, 'about'])->name('about');
Route::get('services', [App\Http\Controllers\User\ServiceController::class, 'index'])->name('services');
Route::get('doctors', [App\Http\Controllers\User\DoctorController::class, 'index'])->name('doctors');
Route::get('departments', [App\Http\Controllers\User\DepartmentController::class, 'index'])->name('departments');
Route::get('user/contacts', [App\Http\Controllers\User\ContactController::class, 'index'])->name('user.contacts');
Route::post('user/contacts/store', [App\Http\Controllers\User\ContactController::class, 'store'])->name('user.contact.store');
Route::get('blog/detail/{id}', [App\Http\Controllers\User\BlogController::class, 'show']);



Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout']);
});




Route::resource('service', ServiceController::class)->middleware('auth', 'admin');
Route::resource('doctor', DoctorController::class)->middleware('auth', 'admin');
Route::resource('appointment', AdminAppointmentController::class)->middleware('auth', 'admin');
Route::get('appointment/status/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'status']);
Route::resource('appointment-reaply', AppointmentReplyController::class)->middleware('auth', 'admin');
Route::resource('department', DepartmentController::class)->middleware('auth', 'admin');
Route::resource('contact', ContactController::class)->middleware('auth', 'admin');
Route::get('contact/status/{id}', [App\Http\Controllers\Admin\ContactController::class, 'status']);


Route::resource('blog', BlogController::class)->middleware('auth', 'admin');

Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'Admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);
});
