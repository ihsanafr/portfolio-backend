@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Techstack Count -->
        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-dark">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Techstacks</h5>
                            <h2 class="mb-0">{{ $count['techstacks'] }}</h2>
                        </div>
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <a href="{{ route('admin.techstacks.index') }}" class="text-dark small">View All</a>
                </div>
            </div>
        </div>
        <!-- Project Count -->
        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Projects</h5>
                            <h2 class="mb-0">{{ $count['projects'] }}</h2>
                        </div>
                        <i class="fas fa-project-diagram fa-3x"></i>
                    </div>
                    <a href="{{ route('admin.projects.index') }}" class="text-white small">View All</a>
                </div>
            </div>
        </div>
        <!-- Experience Count -->
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Experiences</h5>
                            <h2 class="mb-0">{{ $count['experiences'] }}</h2>
                        </div>
                        <i class="fas fa-briefcase fa-3x"></i>
                    </div>
                    <a href="{{ route('admin.experiences.index') }}" class="text-white small">View All</a>
                </div>
            </div>
        </div>
        <!-- Certificate Count -->
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Certificates</h5>
                            <h2 class="mb-0">{{ $count['certificates'] }}</h2>
                        </div>
                        <i class="fas fa-certificate fa-3x"></i>
                    </div>
                    <a href="{{ route('admin.certificates.index') }}" class="text-white small">View All</a>
                </div>
            </div>
        </div>

        

        

        
    </div>

    <!-- Content lainnya -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Welcome to Dashboard</h5>
            <p class="card-text">You have total {{ array_sum($count) }} items in your portfolio.</p>
        </div>
    </div>
</div>
@endsection