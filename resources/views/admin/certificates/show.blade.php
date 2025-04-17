@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Certificate Details</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if($certificate->image)
                        <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-8">
                    <h2>{{ $certificate->name }}</h2>
                    <p><strong>Issue Date:</strong> {{ $certificate->date}}</p>
                    <p><strong>Organizer:</strong> {{ $certificate->organizer }}</p>
                    
                    @if($certificate->certificate_link)
                        <p><strong>Certificate Link:</strong> 
                            <a href="{{ $certificate->certificate_link }}" target="_blank">View Certificate</a>
                        </p>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('admin.certificates.edit', $certificate->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection