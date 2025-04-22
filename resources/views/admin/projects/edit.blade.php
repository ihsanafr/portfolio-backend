{{-- @extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Edit Project</h2>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Project Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $project->name) }}" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Project Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $project->type) }}" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            @if($project->image)
                            <div class="mb-2">
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="img-thumbnail" width="100">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="remove_image" name="remove_image">
                                    <label class="form-check-label" for="remove_image">
                                        Remove current image
                                    </label>
                                </div>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            
                            <div class="form-text">Upload a project image (max 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="overview" class="form-label">Overview</label>
                            <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview" rows="3" required>{{ old('overview', $project->overview) }}</textarea>
                            
                        </div>

                        <div class="mb-3">
                            <label for="goals_motivation" class="form-label">Goals & Motivation</label>
                            <textarea class="form-control @error('goals_motivation') is-invalid @enderror" id="goals_motivation" name="goals_motivation" rows="3" required>{{ old('goals_motivation', $project->goals_motivation) }}</textarea>
                            
                        </div>

                        <div class="mb-3">
                            <label for="techstacks" class="form-label">Techstacks</label>
                            <select class="form-select @error('techstacks') is-invalid @enderror" id="techstacks" name="techstacks[]" multiple>
                                @foreach($techstacks as $techstack)
                                <option value="{{ $techstack->id }}" {{ in_array($techstack->id, old('techstacks', $project->techstacks->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $techstack->name }}</option>
                                @endforeach
                            </select>
                           
                            <div class="form-text">Hold CTRL/CMD to select multiple</div>
                        </div>

                        <div class="mb-3">
                            <label for="project_link" class="form-label">Project Link</label>
                            <input type="url" class="form-control @error('project_link') is-invalid @enderror" id="project_link" name="project_link" value="{{ old('project_link', $project->project_link) }}">
                            
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Initialize select2 for techstacks
    document.addEventListener('DOMContentLoaded', function() {
        $('#techstacks').select2({
            placeholder: "Select techstacks",
            allowClear: true
        });
    });
</script>
@endpush
@endsection --}}

{{-- ================================================ --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashpro by BuildWithAngga</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">

</head>

<body class="font-['General Sans'] bg-[#f5f5f5]">

    

    <div class="flex flex-row justify-start">
        @include('admin.layouts.sidebar')
        <div class="flex-auto w-screen lg:pl-[250px]">
            @include('admin.layouts.header')



            <section class="sales pt-10 px-7 grid grid-cols-1 md:grid-cols-1 gap-x-7 gap-y-7">
                <a href="{{ route('admin.projects.index') }}" class="text-blue-500 font-semibold hover:text-blue-700 transform transition duration-500">Kembali</a>
                <div class="flex-col bg-white rounded-2xl p-5 ">
                    <p class="font-bold">Edit Projects</p>
                    <div class="h-10"></div>
                    <form action="{{ route('admin.projects.update', $project->id) }}" class=" flex-col" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Project Name</label>
                            <input type="text" class="bg-gray-50 p-2 border border-gray-200 rounded-lg form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $project->name) }}">
                            
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Project Type</label>
                            <input type="text" class="bg-gray-50 p-2 border border-gray-200 form-control @error('name') is-invalid @enderror" id="type" name="type" value="{{ old('type', $project->type) }}" >
                            <!-- @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror -->
                        </div>

                        <div class="mb-3 flex-col flex">
                            <label for="icon" class="form-label">Project Image</label>
                            @if ($project->image)
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" class="img-thumbnail" width="100">
                            @endif
                            <input type="file" class="bg-gray-50 p-2 border border-gray-200 form-control" id="image" name="image">
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>

                        <div class="mb-3 flex-col flex">
                            <label for="description" class="form-label">Overview</label>
                            <textarea class="bg-gray-50 p-2 border border-gray-200" id="overview" name="overview" rows="3" value="">{{old('overview', $project->overview)}}</textarea>
                            
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="description" class="form-label">Goals And Motivation</label>
                            <textarea class="bg-gray-50 p-2 border border-gray-200" id="goals_motivation" name="goals_motivation" rows="3" value="">{{old('goals_motivation', $project->goals_motivation)}}</textarea>
                        </div>

                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Techstacks</label>
                            <select  name="techstacks[]" id="techstacks" multiple class="bg-gray-50 p-2 border border-gray-200 form-select">
                                @foreach ($techstacks as $techstack)
                                <option value="{{ $techstack->id }}" {{ in_array($techstack->id, old('techstacks', $project->techstacks->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $techstack->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Project Link</label>
                            <input type="url" class="bg-gray-50 p-2 border border-gray-200form-control @error('name') is-invalid @enderror" id="project_link" name="project_link" value="{{ old('project_link', $project->project_link) }}">            
                        </div>  
                        <button type="submit" class="flex items-center justify-center align-center gap-1 text-white bg-blue-700 hover:bg-blue-500 px-4 py-2 rounded-lg transition transform duration-300">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-4m5-13v4a1 1 0 0 1-1 1H5m0 6h9m0 0-2-2m2 2-2 2"/>
                              </svg>     
                            Save
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <script>
        // Initialize select2 for techstacks
        document.addEventListener('DOMContentLoaded', function() {
            $('#techstacks').select2({
                placeholder: "Select techstacks",
                allowClear: true
            });
        });
    </script>
</body>

</html>