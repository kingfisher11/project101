<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use App\Models\Session;
use App\Model\Staff;

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
            $users = auth()->user()->id;
        // $activities = Activity::paginate();
        //    dd($users);  //cara debug dump & die
           return view('activities.create', compact('sessions', 'users'));
           //recources/views/cars/index.blade.php
    
        
    }

    public function store(Request $request)
    {
        try {
            // $user_id = auth()->user()->id;
            $activities = Activity::create([
                'staffno' => auth()->user()->id,
                'session'=> $request->session,
                'desc'=> $request->desc,
                'activitydate'=> $request->activitydate,
                'hours'=> $request->hours,
            ]);

            return redirect()
            ->route('activities');

        }catch(\Exception $e){
            //nak check error2 exception selain dari error validation dll
            dd('Message: ' .$e->getMessage());
            return false;
        }
    
        
    }
}
