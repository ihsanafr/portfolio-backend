@extends('admin.layouts.app')

@section('title', 'Techstack Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Techstack Details</h2>
                <div>
                    <a href="{{ route('admin.techstacks.edit', $techstack->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('admin.techstacks.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            @if($techstack->icon)
                            <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-fluid rounded" style="max-height: 200px;">
                            @else
                            <div class="text-muted py-5">No icon available</div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $techstack->name }}</h3>
                            <p class="text-muted">Created: {{ $techstack->created_at->format('d M Y') }}</p>
                            <p class="text-muted">Last Updated: {{ $techstack->updated_at->format('d M Y') }}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5>Description</h5>
                        <p>{{ $techstack->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection