@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Project</h3>
        <form method="POST",action="{{route('update')}}" enctype="multipart/form-data">
            @CSRF
            @foreach($project as $project)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$project->id}}">
            <div class="form-group">
                <label for="Project name">Project Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
            </div>
            <div class="form-group">
                <label for="budget">Budget</label>
                <input type="number" class="form-control" id="budget" name="budget" min=0 value="{{$project->budget}}">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" value="{{$project->deadline}}">
            </div>
            <div class="form-group">
                <label for="clientID">Client ID</label>
                <input type="text" class="form-control" id="clientID" name="clientID" value="{{$project->clientID}}">
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection