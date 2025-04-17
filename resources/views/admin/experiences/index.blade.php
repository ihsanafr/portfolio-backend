@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h1>Experiences</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
                Add New Experience
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Period</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $experience)
                    <tr>
                        <td>
                            @if($experience->image)
                                <img src="{{ asset($experience->image) }}" alt="{{ $experience->name }}" width="50">
                            @endif
                        </td>
                        <td>{{ $experience->name }}</td>
                        <td>
                            {{ $experience->date }}
                        </td>
                        <td>
                            <a href="{{ route('admin.experiences.show', $experience->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
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
    </div>
</div>
@endsection