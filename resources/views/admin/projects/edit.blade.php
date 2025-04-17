@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Edit Project</h2>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Project Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $project->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Project Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $project->type) }}" required>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            @if($project->image)
                            <div class="mb-2">
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="img-thumbnail" width="100">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="remove_image" name="remove_image">
                                    <label class="form-check-label" for="remove_image">
                                        Remove current image
                                    </label>
                                </div>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Upload a project image (max 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="overview" class="form-label">Overview</label>
                            <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview" rows="3" required>{{ old('overview', $project->overview) }}</textarea>
                            @error('overview')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="goals_motivation" class="form-label">Goals & Motivation</label>
                            <textarea class="form-control @error('goals_motivation') is-invalid @enderror" id="goals_motivation" name="goals_motivation" rows="3" required>{{ old('goals_motivation', $project->goals_motivation) }}</textarea>
                            @error('goals_motivation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="techstacks" class="form-label">Techstacks</label>
                            <select class="form-select @error('techstacks') is-invalid @enderror" id="techstacks" name="techstacks[]" multiple>
                                @foreach($techstacks as $techstack)
                                <option value="{{ $techstack->id }}" {{ in_array($techstack->id, old('techstacks', $project->techstacks->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $techstack->name }}</option>
                                @endforeach
                            </select>
                            @error('techstacks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Hold CTRL/CMD to select multiple</div>
                        </div>

                        <div class="mb-3">
                            <label for="project_link" class="form-label">Project Link</label>
                            <input type="url" class="form-control @error('project_link') is-invalid @enderror" id="project_link" name="project_link" value="{{ old('project_link', $project->project_link) }}">
                            @error('project_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Initialize select2 for techstacks
    document.addEventListener('DOMContentLoaded', function() {
        $('#techstacks').select2({
            placeholder: "Select techstacks",
            allowClear: true
        });
    });
</script>
@endpush
@endsection