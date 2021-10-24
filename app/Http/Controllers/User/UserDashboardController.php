<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        return "hi i am a User dashboard";
    }

    public function about()
    {
        $services = Service::all();
        return view('user.about', compact('services'));
    }
}
