<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('Logout Successfully');
    }
}
