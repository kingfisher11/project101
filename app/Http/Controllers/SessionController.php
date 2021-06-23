<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            $sessions = Session::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('session.session', compact('sessions'));
           //recources/views/cars/index.blade.php
    
        
    }
}
