@extends('admin.layouts.app')

@section('title', 'Project Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Project Details</h2>
                <div>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            @if($project->image)
                            <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="img-fluid rounded" style="max-height: 200px;">
                            @else
                            <div class="text-muted py-5">No image available</div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $project->name }}</h3>
                            <p>
                                <span class="badge bg-{{ $project->type === 'website' ? 'primary' : ($project->type === 'mobile' ? 'success' : ($project->type === 'design' ? 'warning' : 'info')) }}">
                                    {{ ucfirst($project->type) }}
                                </span>
                            </p>
                            <p class="text-muted">Created: {{ $project->created_at->format('d M Y') }}</p>
                            <p class="text-muted">Last Updated: {{ $project->updated_at->format('d M Y') }}</p>
                            
                            @if($project->project_link)
                            <a href="{{ $project->project_link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-external-link-alt"></i> View Project
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5>Techstacks</h5>
                        @forelse($project->techstacks as $techstack)
                        <span class="badge bg-secondary me-1">
                        <img src="{{ asset($techstack->icon) }}" alt="">

                            {{ $techstack->name }}</span>
                        @empty
                        <p class="text-muted">No techstacks assigned</p>
                        @endforelse
                    </div>

                    <div class="mb-4">
                        <h5>Overview</h5>
                        <p>{{ $project->overview }}</p>
                    </div>

                    <div class="mb-4">
                        <h5>Goals & Motivation</h5>
                        <p>{{ $project->goals_motivation }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection