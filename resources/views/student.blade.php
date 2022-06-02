@extends('body')

@section('title')
Students
@endsection

@section('content')
<div class="studentscontainer">
    <form class="row g"  action="students/add" method="post">
        @csrf
        <div class="col-md-4">
            <label for="sfnb" class="form-label">Student First name *</label>
            <input type="text" class="form-control" id="sfnb" name="student_first_name_box"  placeholder="Name" required="">
        </div>
        <div class="col-md-4">
            <label for="slnb" class="form-label">Student Last name *</label>
            <input type="text" class="form-control" id="slnb" name="student_last_name_box" placeholder="Family" required="">
        </div>
        <div class="col-md-2">
            <label for="sncb" class="form-label">Student National Code *</label>
            <input type="text" class="form-control" id="sncb" name="student_national_code_box" placeholder="0123456789" required="">
        </div>
        <div class="col-md-3">
            <label for="seb" class="form-label">Student Email</label>
            <input type="text" class="form-control" id="seb" name="student_email_box" placeholder="info@example.com">
        </div>
        <div class="col-md-2">
            <label for="spb" class="form-label">Student Phone</label>
            <input type="text" class="form-control" id="spb" name="student_phone_box" placeholder="09120000000">
        </div>
        <div class="col-md-5">
            <label for="sfl" class="form-label">Student Field</label>
            <select class="form-select form-select-md" id="sfl" name="student_field" aria-label=".form-select-sm example">
                <option selected="">...</option>
                @foreach($fields as $key => $field)
                    <option value="{{ $field['Field_ID'] }}"> {{ $field['Title'] }} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <button  id="add_student_btn" class="btn btn-primary" type="submit">Add Student</button>
        </div>
        
    </form>
    
</div>
@endsection

@section('content_records_title')
Recently Students
@endsection
