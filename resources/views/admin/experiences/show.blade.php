@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Experience Details</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if($experience->image)
                        <img src="{{ asset($experience->image) }}" alt="{{ $experience->name }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-8">
                    <h2>{{ $experience->name }}</h2>
                    <p><strong>Period:</strong> 
                        {{ $experience->date}}
                    </p>
                    
                    <h4 class="mt-4">Overview</h4>
                    <p>{{ $experience->overview }}</p>
                    
                    <h4>Goals & Motivation</h4>
                    <p>{{ $experience->goals_motivation }}</p>

                    <div class="mt-4">
                        <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection