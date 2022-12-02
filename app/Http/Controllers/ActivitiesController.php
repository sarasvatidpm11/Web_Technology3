<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $act = Activity::all()->sortByDesc("act_id");
        return view('activities', compact("act"));
    }
}

