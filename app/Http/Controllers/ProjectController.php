<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import 
use App\Models\Project; //import
use Session;

class ProjectController extends Controller
{
    public function store(){
        $r=request(); //request means received the form data by method get or post
        $add=Project::create([
            'name'=>$r->name,
            'budget'=>$r->budget,
            'deadline'=>$r->deadline,
            'clientID'=>$r->clientID,
        ]);
        Session::flash('success',"Project added!");
        return redirect()->route('showProject'); //after insert redirect to view product
    }
    public function view(){
        $project=Project::all(); //apply SQL select * from categories
        return view('showProject')->with('projects',$project);
    }
    public function viewAll(){
        $project=Project::all(); //apply SQL select * from categories
        return view('projects')->with('projects',$project);
    }
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $result=DB::table('project')->where('project.budget','like','%'.$keyword.'%')->orwhere('project.deadline','like','%'.$keyword.'%')->get(); //select * from products where name like '%$keyword%'

        return view('projects')->with('projects',$project);
    }
    public function edit($id){
        $edit=Project::all()->where('id',$id); //select * from products where id='$id'
        return view('editProject')->with('projects',$project);
    }
    public function update(){
        $r=request();
        $projects=Project::find($r->id); //retrieve the record based on id
        $projects->name=$r->name;
        $projects->budget=$r->budget;
        $projects->deadline=$r->deadline;
        $projects->clientID=$r->clientID;
        $projects->save();
        Session::flash('success',"Project updated successful!");
        return redirect()->route('showProject');
    }
}
