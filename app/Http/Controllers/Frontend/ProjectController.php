<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::with('techstacks')->latest()->get();
        return view('frontend.pages.projects.project', compact('projects'));
    }

    public function show(Project $project): View
    {
        $project->load('techstacks');
        return view('frontend.pages.projects.detail', compact('project'));
    
        
    }
}