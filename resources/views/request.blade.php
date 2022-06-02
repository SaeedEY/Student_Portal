@extends('body')

@section('title')
Requests
@endsection

@section('content')
<div class="requestscontainer">
    <form class="row g"  action="requests/add" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Request Title</span>
            <input type="text" class="form-control" id="basic-url" name="request_title_box" aria-describedby="basic-addon3">
        </div>
        <div class="col-md-6 input-group">
            <span class="input-group-text">Your Request</span>
            <textarea class="form-control" rows="10" aria-label="With textarea" name="request_text_box" onchange="document.getElementById('send_request_btn').classList.remove('disabled')"></textarea>

        </div>
        <div class="col-md-3">
            <button  id="send_request_btn" class="btn btn-primary disabled" type="submit">Send Request</button>
        </div>
        <br>
    </form>
</div>
@endsection

@section('content_records_title')
Recently Requests
@endsection
