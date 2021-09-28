@extends('layout')
@section('content')
    <div class="row">
        @foreach($project as $project)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>
                <p class="card-text">{{$project->budget}}</p>
                <div class="card-heading">{{$project->deadline}}</div>
                <div class="card-heading">{{$project->clientID}}</div>
                <button class="btn btn-danger btn-xs">Select</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection