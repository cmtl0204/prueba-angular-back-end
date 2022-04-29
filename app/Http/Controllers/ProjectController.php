<?php

namespace App\Http\Controllers;

use App\Models\Modality;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::get();

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->modality()->associate(Modality::find($request->input('modalityId')));
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->state = $request->input('state');
        $project->save();

        return response()->json($project);
    }

    public function show(Project $project)
    {
        return response()->json($project);
    }

    public function update(Request $request, Project $project)
    {
        $project->modality()->associate(Modality::find($request->input('modalityId')));
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->state = $request->input('state');
        $project->save();

        return response()->json($project);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json(['rta' => true]);
    }
}
