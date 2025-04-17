@extends('admin.layouts.app')

@section('title', 'Edit Techstack')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Edit Techstack</h2>
                <a href="{{ route('admin.techstacks.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.techstacks.update', $techstack->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $techstack->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            @if($techstack->icon)
                            <div class="mb-2">
                                <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-thumbnail" width="100">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="remove_icon" name="remove_icon">
                                    <label class="form-check-label" for="remove_icon">
                                        Remove current icon
                                    </label>
                                </div>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon">
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" maxlength="150" required>{{ old('description', $techstack->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Max 30 words (150 characters)</div>
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
@endsection