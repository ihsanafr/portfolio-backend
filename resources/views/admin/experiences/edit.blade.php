@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Edit Experience</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Experience Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $experience->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Experience Image</label>
                    @if($experience->image)
                        <div class="mb-2">
                            <img src="{{ asset($experience->image) }}" alt="{{ $experience->name }}" width="100">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date Period</label>
                    <input type="text" class="form-control" id="date" name="date" 
                           placeholder="Contoh: 2020 - 2022 atau Jan 2020 - Mar 2022" value="{{ old('date', $experience->date) }}" required>
                </div>


                <div class="mb-3">
                    <label for="overview" class="form-label">Overview</label>
                    <textarea class="form-control" id="overview" name="overview" rows="3" required>{{ old('overview', $experience->overview) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="goals_motivation" class="form-label">Goals & Motivation</label>
                    <textarea class="form-control" id="goals_motivation" name="goals_motivation" rows="3" required>{{ old('goals_motivation', $experience->goals_motivation) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection