@extends('body')

@section('title')
Fields
@endsection

@section('content')
<div class="fieldscontainer">
    <form class="row" action="fields/add" method="post">
        @csrf
        <!-- <div class="col-md-10">
            <label class="form-label">Existing Fields</label>
            <select class="form-select form-select-md" id="existing_field_list" name="existing_field_list" aria-label=".form-select-md example" onchange="document.getElementById('new_field_box').readOnly=true;document.getElementById('add_field_btn').classList.remove('disabled');">
                <option selected="">...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> -->
        
        <div class="col-md-9">
            <label class="form-label">New Field</label>
            <input class="form-control form-control-md" id="new_field_box" name="new_field_box" type="text" placeholder="Add New Field" aria-label=".form-control-md example" onchange="document.getElementById('add_field_btn').classList.remove('disabled');">
        </div>
        <div class="col-md-3">
            <button  id="add_field_btn" class="btn btn-primary disabled" type="submit">Add Field</button>
        </div>
        <br>
    </form>
    
</div>
@endsection

@section('content_records_title')
Recently Fields
@endsection

