<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class AgentController extends Controller
{
    /*
    *   Show Agents List for administrator
    */
    public function agentsListIndex(){
        $student_id = 1; // For Authenticated user this should be loaded from user details in db        
        $agnt = new Models\Agent();
        $fld = (new Models\Field())->get()->toArray();
        $rows = $agnt->select(['Agent_ID','Name','LastName','Field_ID','Job_Title'])->get()->toArray();
        $columns = isset($rows[0]) ? array_keys($rows[0]) : [];
        return view('agent')->with(['rows'=>$rows,'columns'=>$columns,'fields'=>$fld]);
    }
    public function addNewAgent(Request $request){
        $agnt = new Models\Agent();
        $agnt->Name = $request->agent_first_name_box;
        $agnt->LastName = $request->agent_last_name_box;
        // $agnt->Phone = $request->agent_phone_box;
        $agnt->Job_Title = $request->agent_job_title_box;
        $agnt->Identity_Code = $request->agent_national_code_box;
        $agnt->Field_ID = $request->agent_field;
        if($agnt->save())
            return redirect('/administrator/agents')->with('success','New Agent Successfully Submited .');
        else
            return redirect('/administrator/agents')->with('warning','New Agent Submition Failed !');
    }
}
