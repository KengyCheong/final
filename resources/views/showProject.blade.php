@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Project <b>List</b></h2></div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Budget</th>
                    <th>Deadline</th>
                    <th>Client ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->budget}}</td>
                    <td>{{$project->deadline}}</td>
                    <td>{{$project->cllientID}}</td>
                    <td>        
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">Delete</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection