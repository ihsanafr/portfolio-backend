<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|string',
            'overview' => 'required|string',
            'goals_motivation' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/experiences'), $imageName);
            $data['image'] = 'images/experiences/'.$imageName;
        }

        Experience::create($data);

        return redirect()->route('admin.experiences.index')
                         ->with('success', 'Experience created successfully.');
    }

    public function show(Experience $experience)
    {
        return view('admin.experiences.show', compact('experience'));
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|string',
            'overview' => 'required|string',
            'goals_motivation' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($experience->image && file_exists(public_path($experience->image))) {
                unlink(public_path($experience->image));
            }
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/experiences'), $imageName);
            $data['image'] = 'images/experiences/'.$imageName;
        }

        $experience->update($data);

        return redirect()->route('admin.experiences.index')
                         ->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->image && file_exists(public_path($experience->image))) {
            unlink(public_path($experience->image));
        }

        $experience->delete();

        return redirect()->route('admin.experiences.index')
                         ->with('success', 'Experience deleted successfully.');
    }
}