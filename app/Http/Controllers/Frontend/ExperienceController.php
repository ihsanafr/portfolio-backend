<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('frontend.experiences.index', compact('experiences'));
    }

    public function show(Experience $experience)
    {
        return view('frontend.experiences.show', compact('experience'));
    }
}