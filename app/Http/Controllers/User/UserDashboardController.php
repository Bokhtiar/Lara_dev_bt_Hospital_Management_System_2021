<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function about()
    {
        $services = Service::all();
        return view('user.about', compact('services'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
