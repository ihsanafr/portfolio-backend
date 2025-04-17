@extends('admin.layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50px">Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Techstacks</th>
                            <th width="150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                        <tr>
                            <td>
                                @if($project->image)
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="img-thumbnail" width="50">
                                @else
                                <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>{{ $project->name }}</td>
                            <td>
                                <span class="badge bg-{{ $project->type === 'website' ? 'primary' : ($project->type === 'mobile' ? 'success' : ($project->type === 'design' ? 'warning' : 'info')) }}">
                                    {{ ucfirst($project->type) }}
                                </span>
                            </td>
                            <td>
                                @forelse($project->techstacks as $techstack)
                                <span class="badge bg-secondary me-1">{{ $techstack->name }}</span>
                                @empty
                                <span class="text-muted">No techstacks</span>
                                @endforelse
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-info">
                                        Show
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No projects found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($projects->hasPages())
            <div class="mt-3">
                {{ $projects->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection