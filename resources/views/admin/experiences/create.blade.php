@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Add New Experience</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.experiences.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Experience Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Experience Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date Period</label>
                    <input type="text" class="form-control" id="date" name="date" 
                           placeholder="Contoh: 2020 - 2022 atau Jan 2020 - Mar 2022" required>
                </div>

                <div class="mb-3">
                    <label for="overview" class="form-label">Overview</label>
                    <textarea class="form-control" id="overview" name="overview" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="goals_motivation" class="form-label">Goals & Motivation</label>
                    <textarea class="form-control" id="goals_motivation" name="goals_motivation" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection