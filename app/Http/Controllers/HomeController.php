<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $act = Activity::all()
            ->sortByDesc("act_id")
            ->take(3);
        return view('index', compact("act"));
    }
}

