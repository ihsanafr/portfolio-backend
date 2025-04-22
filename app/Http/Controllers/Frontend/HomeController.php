<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredExperiences = Experience::latest()->take(3)->get();
        $featuredProjects = Project::with('techstacks')
                            ->latest()
                            ->take(3)
                            ->get();
        
        return view('frontend.pages.index', compact('featuredProjects', 'featuredExperiences'));
    }
}
