<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\MentorPL;
use App\Models\Student;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class MentorPLController extends Controller
{
    public function show($nostaff)
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view

  
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        // return view('test.index', compact('mentors'));
        // $mentor = Mentor::find($nostaff);
        $staffs =  Staff::find($nostaff);
        $mentors = DB::table('RKD01_Peribadi')
          ->join('RKD_MentorPL', 'RKD01_Peribadi.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik')
          ->select('RKD01_Peribadi.RKD01_Nomatrik', 'RKD01_Peribadi.RKD01_Nama', 'RKD01_Peribadi.RKD01_Program')
          ->where('RKD_MentorPL.NoStaf', '=', $nostaff)
          ->paginate(15);

          DB::table('RKD01_Peribadi')

        //   dd($mentor);
        
        // $student = Student::first();
        // dd($student);
        
        //$mentee = MentorPL::where('NoStaf','01459')->first();
        //dd($mentor->students);
        // $mentee = $mentor->getStudent;
        // [0]->students;
        // $mentor = \App\Models\Mentor::paginate();
        return view('mentors.mentormentee', compact(['mentors'], 'staffs'));

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }
}
