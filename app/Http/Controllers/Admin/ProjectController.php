<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Techstack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('techstacks')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $techstacks = Techstack::all();
        return view('admin.projects.create', compact('techstacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string',
            'overview' => 'required|string',
            'goals_motivation' => 'required|string',
            'project_link' => 'nullable|url',
            'techstacks' => 'nullable|array',
            'techstacks.*' => 'exists:techstacks,id',
        ]);

        $data = $request->except('techstacks');

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/projects'), $imageName);
            $data['image'] = 'images/projects/'.$imageName;
        }

        $project = Project::create($data);

        if ($request->has('techstacks')) {
            $project->techstacks()->sync($request->techstacks);
        }

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $project->load('techstacks');
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $techstacks = Techstack::all();
        $project->load('techstacks');
        return view('admin.projects.edit', compact('project', 'techstacks'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string',
            'overview' => 'required|string',
            'goals_motivation' => 'required|string',
            'project_link' => 'nullable|url',
            'techstacks' => 'nullable|array',
            'techstacks.*' => 'exists:techstacks,id',
        ]);

        $data = $request->except('techstacks');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/projects'), $imageName);
            $data['image'] = 'images/projects/'.$imageName;
        }

        $project->update($data);

        if ($request->has('techstacks')) {
            $project->techstacks()->sync($request->techstacks);
        } else {
            $project->techstacks()->detach();
        }

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }

        $project->techstacks()->detach();
        $project->delete();

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project deleted successfully.');
    }
}