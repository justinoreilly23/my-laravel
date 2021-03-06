<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectsController extends Controller {

    public static function index()
    {
        $projects = Project::where('owner_id', auth()->id())->simplePaginate(4);

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        Project::create($request->all());

        return redirect('/projects');
    }

    public function edit(Project $project) // example.com/projects/id/edit
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project, UpdateProjectRequest $request)
    {
        $project->update($request->all());

        return view('projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}


