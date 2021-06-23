<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentSemester;

class SemPLController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            // $sems = StudentSemester::paginate();
            $sems = StudentSemester::select('*')
            // ->where('NoStaf', '=', $nostaff)
            ->where('KodSesi_Sem', '=', '0419')
            ->paginate(15);
           // dd($trainings);  //cara debug dump & die
           return view('session.sem', compact('sems'));
           //recources/views/cars/index.blade.php
    
        
    }
}
