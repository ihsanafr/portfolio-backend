@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Edit Certificate</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Certificate Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $certificate->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Certificate Image</label>
                    @if($certificate->image)
                        <div class="mb-2">
                            <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}" width="100">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" 
                           value="{{ old('date', $certificate->date) }}" required">
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Organizer</label>
                    <input type="text" class="form-control" id="organizer" name="organizer" value="{{ old('organizer', $certificate->organizer) }}" required>
                </div>

                <div class="mb-3">
                    <label for="certificate_link" class="form-label">Certificate Link (URL)</label>
                    <input type="url" class="form-control" id="certificate_link" name="certificate_link" value="{{ old('certificate_link', $certificate->certificate_link) }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection