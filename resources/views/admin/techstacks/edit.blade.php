{{-- @extends('admin.layouts.app')

@section('title', 'Edit Techstack')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Edit Techstack</h2>
                <a href="{{ route('admin.techstacks.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.techstacks.update', $techstack->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $techstack->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            @if($techstack->icon)
                            <div class="mb-2">
                                <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-thumbnail" width="100">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="remove_icon" name="remove_icon">
                                    <label class="form-check-label" for="remove_icon">
                                        Remove current icon
                                    </label>
                                </div>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon">
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" maxlength="150" required>{{ old('description', $techstack->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Max 30 words (150 characters)</div>
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
@endsection --}}


{{-- ============================================ --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashpro by BuildWithAngga</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">

</head>

<body class="font-['General Sans'] bg-[#f5f5f5]">


    <div class="flex flex-row justify-start">
        @include('admin.layouts.sidebar')
        <div class="flex-auto w-screen lg:pl-[250px]">
            @include('admin.layouts.header')
            <section class="sales pt-10 px-7 grid grid-cols-1 md:grid-cols-1 gap-x-7 gap-y-7">
                <a href="{{route('admin.techstacks.index')}}" class="text-blue-500 font-semibold hover:text-blue-700 transform transition duration-500">Kembali</a>
                <div class="flex-col bg-white rounded-2xl p-5 ">
                    <p class="font-bold">Edit Techstack</p>
                    <div class="h-10"></div>
                    <form action="{{ route('admin.techstacks.update', $techstack->id) }}" class=" flex-col" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Techstacks Name</label>
                            <input type="text" class="bg-gray-50 rounded-lg p-2 border border-gray-200 form-control" id="name" name="name" value="{{ old('name', $techstack->name) }}" >
                            
                        </div>

                        <div class="mb-3 flex-col flex">
                            @if ($techstack->icon)
                                <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-thumbnail w-28">
                            @endif
                            <label for="icon" class="form-label">Icon</label>
                            <input type="file" class="bg-gray-50 rounded-lg form-control border border-gray-200 p-2" id="icon" name="icon" >
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="bg-gray-50 rounded-lg border border-gray-200 p-2" id="description" name="description" rows="3" maxlength="150" >{{old('description', $techstack->description)}}</textarea>
                        </div>
                        <button type="submit" class="flex items-center justify-center align-center gap-1 text-white bg-blue-700 hover:bg-blue-500 px-4 py-2 rounded-lg transition transform duration-300">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-4m5-13v4a1 1 0 0 1-1 1H5m0 6h9m0 0-2-2m2 2-2 2"/>
                              </svg>
                            Save
                        </button>
                    
                </div>
            </section>



        </div>
    </div>
</body>

</html>