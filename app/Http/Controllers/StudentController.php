<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class StudentController extends Controller
{
    public function index(){
        $student_id = 1; // For Authenticated user this should be loaded from user details in db        
        $std = new Models\Student();
        $fld = (new Models\Field())->get()->toArray();
        $rows = $std->select(['Student_ID','Name','LastName','Field_ID','Entry_Year'])->get()->toArray();
        $columns = isset($rows[0]) ? array_keys($rows[0]) : [];
        return view('student')->with(['rows'=>$rows,'columns'=>$columns,'fields'=>$fld]);
    }
    public function add(Request $request){
        $std = new Models\Student();
        $std->Name = $request->student_first_name_box;
        $std->LastName = $request->student_last_name_box;
        $std->Phone = $request->student_phone_box;
        $std->Email = $request->student_email_box;
        $std->Identity_Code = $request->student_national_code_box;
        $std->Field_ID = $request->student_field;
        $std->Entry_Year = date('Y');
        if($std->save())
            return redirect('/administrator/students')->with('success','New Student Successfully Submited .');
        else
            return redirect('/administrator/students')->with('warning','New Student Submition Failed !');
    }
}
