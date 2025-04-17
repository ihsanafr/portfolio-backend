<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Techstack;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'techstacks' => Techstack::count(),
            'projects' => Project::count(),
            'experiences' => Experience::count(),
            'certificates' => Certificate::count(),
        ];

        return view('admin.dashboard', compact('count'));
    }
}