@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Client</h3>
        <form method="POST",action="{{route('add')}}" enctype="multipart/form-data">
            @CSRF
            <div class="form-group">
                <label for="Project name as">Project Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="Project budget">Budget</label>
                <input type="number" class="form-control" id="budget" name="budget" min="0">
            </div>
            <div class="form-group">
                <label for="Project deadline">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline">
            </div>
            <div class="form-group">
                <label for="Project clientID">Client ID</label>
                <input type="text" class="form-control" id="clientID" name="clientID">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection