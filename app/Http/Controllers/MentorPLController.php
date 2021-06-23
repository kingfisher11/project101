<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\MentorPL;
use App\Models\Student;
use App\Models\Staff;
use App\Models\StudentSemester;
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

  
        // $mentor = DB::table('RKD_MentorPL')->find($nostaff);
        // return view('test.index', compact('mentors'));
        // $mentor = Mentor::find($nostaff); //ada
        $staffs =  Staff::find($nostaff); //ada
        // $mentor =  MentorPL::find($nostaff);
        // $studentsems =  StudentSemester::get();
        // $students =  Student::get();
        // $mentors =  Mentor::find($nostaff);

        // $applicants = Applicant::with(['choice'])->wherehas('agent',function($query) use($user_id){
        //     $query->where('user_id',$user_id);
        
        // $mentors = DB::table('RKD01_Peribadi')
        //   ->join('RKD_MentorPL', 'RKD01_Peribadi.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik')
        //   ->select('RKD01_Peribadi.RKD01_Nomatrik', 'RKD01_Peribadi.RKD01_Nama', 'RKD01_Peribadi.RKD01_Program')
        //   ->where('RKD_MentorPL.NoStaf', '=', $nostaff)
        //   ->paginate(15);
        
        //   $mentors=DB::table('RKD_MentorPL')
        //   ->join('RKD_Peribadi', 'RKD01_Peribadi.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik')
        //   ->join('KRS_ThnSemPL', 'KRS_ThnSemPL.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik', 'KRS_ThnSemPL.KodSesi_Sem', '=', 'RKD_MentorPL.KodSesi_Sem')
        //   ->select('RKD01_Peribadi.RKD01_Nomatrik', 'RKD01_Peribadi.RKD01_Nama', 'RKD01_Peribadi.RKD01_Program', 'RKD01_Peribadi.RKD01_Kohort', 'KRS_ThnSemPL.Semester', 'KRS_ThnSemPL.StatusAkademik', 'KRS_ThnSemPL.StatusPelajar', 'KRS_ThnSemPL.StatusDaftarMP', 'KRS_ThnSemPL.StatusHutang', 'KRS_ThnSemPL.StatusPL_Kod')
        //   ->where('RKD_MentorPL.NoStaf', '=', $nostaff, 'RKD_MentorPL.KodSesi_Sem', '=', '0720')
        //   ->orderby('RKD01_Peribadi.RKD01_Nama')
        //   ->paginate(15);

        // $mentors = DB::table('RKD_MentorPL')
        // ->innerJoin('RKD_Peribadi', function($join){
        //     $join->on('RKD01_Peribadi.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik');
        // })
        // ->innerJoin('KRS_ThnSemPL', function($join){
        //     $join->on('KRS_ThnSemPL.RKD01_Nomatrik', '=', 'RKD_MentorPL.RKD01_Nomatrik')
        //     ->where('KRS_ThnSemPL.KodSesi_Sem', '=', 'RKD_MentorPL.KodSesi_Sem');
        // })
        // ->select('RKD01_Peribadi.RKD01_Nomatrik', 'RKD01_Peribadi.RKD01_Nama', 'RKD01_Peribadi.RKD01_Program', 'RKD01_Peribadi.RKD01_Kohort', 'KRS_ThnSemPL.Semester', 'KRS_ThnSemPL.StatusAkademik', 'KRS_ThnSemPL.StatusPelajar', 'KRS_ThnSemPL.StatusDaftarMP', 'KRS_ThnSemPL.StatusHutang', 'KRS_ThnSemPL.StatusPL_Kod')
        // ->where('RKD_MentorPL.NoStaf', '=', $nostaff)
        // ->where('RKD_MentorPL.KodSesi_Sem', '=', '0720')
        // ->get();

        //   $mentee = MentorPL::where('NoStaf',$nostaff)->get();
        //   $sesi = StudentSemester::where('KodSesi_Sem','0419')->get();
          
          
          $mentors = MentorPL::select('*')
          ->where('NoStaf', '=', $nostaff)
          ->where('KodSesi_Sem', '=', '0419')
          ->get();

          
          
        // $student = Student::first();
        
        
        
        //dd($mentor->students);
        // $mentee = $mentor->getStudent;
        // [0]->students;
        // $mentor = \App\Models\Mentor::paginate();
        return view('mentors.mentormentee', compact('mentors', 'staffs'));

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }
}
