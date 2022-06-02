<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class RequestController extends Controller
{
    public function index(){
        $student_id = 1; // For Authenticated user this should be loaded from user details in db        
        $reqs = new Models\Request();
        $rows = $reqs->select(['Request_ID','Title','Issue_Date','Status'])->where('Student_ID',$student_id)->get()->toArray();
        $columns = isset($rows[0]) ? array_keys($rows[0]) : [];
        return view('request')->with(['rows'=>$rows,'columns'=>$columns]);
    }
    public function add(Request $request){
        $req = new Models\Request();
        $req->Issue_Date = date('Y-m-d H:i:s');
        $req->Student_ID = 1;// For Authenticated user this should be loaded from user details in db        
        $req->Request_Text = $request->request_text_box;
        $req->Field_ID = 1;// For Authenticated user this should be loaded from user details in db        
        $req->Status = 'In Progress';
        $req->Title = $request->request_title_box;
        if($req->save())
            return redirect('/requests')->with('success','Request Successfully Submited !');
        else
            return redirect('/requests')->with('warning','Request Submition Failed !');
    }
}
