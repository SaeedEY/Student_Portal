@extends('body')

@section('title')
Agents
@endsection

@section('content')
<div class="agentscontainer">
    <form class="row g"  action="agents/add" method="post">
        @csrf
        <div class="col-md-4">
            <label for="afnb" class="form-label">Agent First name *</label>
            <input type="text" class="form-control" id="afnb" name="agent_first_name_box" placeholder="Name" required="">
        </div>
        <div class="col-md-4">
            <label for="alnb" class="form-label">Agent Last name *</label>
            <input type="text" class="form-control" id="alnb" name="agent_last_name_box" placeholder="Family" required="">
        </div>
        <div class="col-md-2">
            <label for="ancb" class="form-label">Agent National Code *</label>
            <input type="text" class="form-control" id="ancb" name="agent_national_code_box" placeholder="0123456789" required="">
        </div>
        <div class="col-md-5">
            <label for="ajtb" class="form-label">Agent Job Title *</label>
            <input type="text" class="form-control" id="ajtb" name="agent_job_title_box" placeholder="Department Educational Manager"  required="">
        </div>
        <div class="col-md-5">
            <label class="form-label">Agent Field</label>
            <select class="form-select form-select-md" id="sfl" name="agent_field" aria-label=".form-select-sm example">
                <option selected="">...</option>
                @foreach($fields as $key => $field)
                    <option value="{{ $field['Field_ID'] }}"> {{ $field['Title'] }} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <button  id="add_agent_btn" class="btn btn-primary" type="submit">Add Agent</button>
        </div>
        
    </form>
    
</div>
@endsection


@section('content_records_title')
Recently Agents
@endsection
