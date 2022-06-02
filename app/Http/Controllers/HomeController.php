<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginIndex(Request $request){
        if($request->session()->has('StudentID') or $request->session()->has('AgentID'))
            return view('body');
        else
            return view('login');
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect('/');
    }
    public function login(Request $request){
        
        $id = $request->ID;
        $natcode = $request->NATCODE;

        $std = Student::where(['Student_ID'=>$id,'Identity_Code'=>$natcode])->first();
        $agnt = Agent::where(['Agent_ID'=>$id,'Identity_Code'=>$natcode])->first();
        if(isset($std->Student_ID))
            $request->session()->put('StudentID',$id);
        else if (isset($agnt->Agent_ID)){
            if($agnt->role == 2)
                $request->session()->put('isAdmin',true);
            $request->session()->put('AgentID',$id);
        }else
            return redirect('/')->with(['warning'=>'Login Failed !']);
        return view('body');
    }
    
}
