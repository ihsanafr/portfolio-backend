<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Techstack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TechstackController extends Controller
{
    public function index()
    {
        $techstacks = Techstack::paginate(10);
        return view('admin.techstacks.index', compact('techstacks'));
    }

    public function create()
    {
        return view('admin.techstacks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:150',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $iconName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('images/techstacks'), $iconName);
            $data['icon'] = 'images/techstacks/'.$iconName;
        }

        Techstack::create($data);

        return redirect()->route('admin.techstacks.index')
                         ->with('success', 'Techstack created successfully.');
    }

    public function show(Techstack $techstack)
    {
        return view('admin.techstacks.show', compact('techstack'));
    }

    public function edit(Techstack $techstack)
    {
        return view('admin.techstacks.edit', compact('techstack'));
    }

    public function update(Request $request, Techstack $techstack)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:150',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            // Delete old icon if exists
            if ($techstack->icon && file_exists(public_path($techstack->icon))) {
                unlink(public_path($techstack->icon));
            }
            
            $iconName = time().'.'.$request->icon->extension();  
            $request->icon->move(public_path('images/techstacks'), $iconName);
            $data['icon'] = 'images/techstacks/'.$iconName;
        }

        $techstack->update($data);

        return redirect()->route('admin.techstacks.index')
                         ->with('success', 'Techstack updated successfully.');
    }

    public function destroy(Techstack $techstack)
    {
        if ($techstack->icon && file_exists(public_path($techstack->icon))) {
            unlink(public_path($techstack->icon));
        }

        $techstack->delete();

        return redirect()->route('admin.techstacks.index')
                         ->with('success', 'Techstack deleted successfully.');
    }
}