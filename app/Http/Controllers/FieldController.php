<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class FieldController extends Controller
{
    public function index(){
        $reqs = new Models\Field();
        $rows = $reqs->all()->toArray();
        $columns = isset($rows[0]) ? array_keys($rows[0]) : [];
        return view('field')->with(['rows'=>$rows,'columns'=>$columns]);
    }
    public function add(Request $request){
        $field = new Models\Field();
        $field->Title = $request->new_field_box;
        if($field->save())
            return redirect('/administrator/fields')->with('success','New Field Successfully Added .');
        else
            return redirect('/administrator/fields')->with('warning','New Field Adding Failed !');
    }
}
