@extends('admin.layouts.app')

@section('title', 'Techstacks')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Techstacks</h1>
        <a href="{{ route('admin.techstacks.create') }}" class="btn btn-primary">
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
                            <th width="50px">Icon</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th width="150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($techstacks as $techstack)
                        <tr>
                            <td>
                                @if($techstack->icon)
                                <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-thumbnail" width="50">
                                @else
                                <span class="text-muted">No icon</span>
                                @endif
                            </td>
                            <td>{{ $techstack->name }}</td>
                            <td>{{ Str::limit($techstack->description, 50) }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.techstacks.show', $techstack->id) }}" class="btn btn-sm btn-info">
                                        show
                                    </a>
                                    <a href="{{ route('admin.techstacks.edit', $techstack->id) }}" class="btn btn-sm btn-primary">
                                        edit
                                    </a>
                                    <form action="{{ route('admin.techstacks.destroy', $techstack->id) }}" method="POST" class="d-inline">
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
                            <td colspan="4" class="text-center">No techstacks found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($techstacks->hasPages())
            <div class="mt-3">
                {{ $techstacks->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection