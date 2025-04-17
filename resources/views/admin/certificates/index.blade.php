@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h1>Certificates</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.certificates.create') }}" class="btn btn-primary">
                Add New Certificate
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
                        <th>Date</th>
                        <th>Organizer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($certificates as $certificate)
                    <tr>
                        <td>
                            @if($certificate->image)
                                <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}" width="50">
                            @endif
                        </td>
                        <td>{{ $certificate->name }}</td>
                        <td>{{ $certificate->date }}</td>
                        <td>{{ $certificate->organizer }}</td>
                        <td>
                            <a href="{{ route('admin.certificates.show', $certificate->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('admin.certificates.edit', $certificate->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST" class="d-inline">
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