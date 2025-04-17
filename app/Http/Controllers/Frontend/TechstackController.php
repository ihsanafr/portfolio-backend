<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Techstack;

class TechstackController extends Controller
{
    public function index()
    {
        $techstacks = Techstack::latest()->get();
        return view('frontend.techstacks.index', compact('techstacks'));
    }
}