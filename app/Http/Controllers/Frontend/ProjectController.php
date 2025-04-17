<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('techstacks')->get();
        return view('frontend.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load('techstacks');
        return view('frontend.projects.show', compact('project'));
    }
}