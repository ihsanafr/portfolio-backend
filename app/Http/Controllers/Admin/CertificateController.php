<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|string',
            'organizer' => 'required|string|max:255',
            'certificate_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/certificates'), $imageName);
            $data['image'] = 'images/certificates/'.$imageName;
        }

        Certificate::create($data);

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate created successfully.');
    }

    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|string',
            'organizer' => 'required|string|max:255',
            'certificate_link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($certificate->image && file_exists(public_path($certificate->image))) {
                unlink(public_path($certificate->image));
            }
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/certificates'), $imageName);
            $data['image'] = 'images/certificates/'.$imageName;
        }

        $certificate->update($data);

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate updated successfully.');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image && file_exists(public_path($certificate->image))) {
            unlink(public_path($certificate->image));
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate deleted successfully.');
    }
}