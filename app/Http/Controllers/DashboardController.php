<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         // Sample statistics data
    $statistics = [
        'users_count' => \App\Models\User::count(),
        // Maari kang magdagdag ng iba pang statistics dito
    ];

    return view('dashboard', ['statistics' => $statistics]);
    }
}
