<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'subject' => 'required',
            'image' => 'required',
            'course_id' => 'required',
           
        ]);

        $project = new Project;
        $project->subject = $request->subject;
        $project->image = $request->image;
        $project->course_id = $request->course_id;


        $project->save();

        return project::create($request->all());
    }

    public function show(string $id)
    {
        return Project::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        $project->update($request->all());
        return $project;

    }


    public function destroy(string $id)
    {
        return Project::destroy($id);
    }
}
