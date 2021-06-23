<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Session;

class ActivityController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15

        $activities = Activity::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('activities.index', compact('activities'));
           //recources/views/cars/index.blade.php
    
        
    }

    public function create()
    {
        

            $sessions = Session::get();
            // $mentor=Mentor::paginate(5); //by default 15

        // $activities = Activity::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('activities.create', compact('sessions'));
           //recources/views/cars/index.blade.php
    
        
    }
}
