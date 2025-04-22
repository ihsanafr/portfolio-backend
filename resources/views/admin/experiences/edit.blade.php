{{-- @extends('admin.layouts.app')

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
@endsection --}}

{{-- ------------------------------ --}}


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
                <a href="{{ route('admin.experiences.index') }}" class="text-blue-500 font-semibold hover:text-blue-700 transform transition duration-500">Kembali</a>
                <div class="flex-col bg-white rounded-2xl p-5 ">
                    <p class="font-bold">Edit Experiences</p>
                    <div class="h-10"></div>
                    <form action="{{ route('admin.experiences.update', $experience->id) }}" class=" flex-col" method="POST" enctype="multipart/form-data">
                         @csrf
                        @method('PUT')
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Experience Name</label>
                            <input type="text" class="bg-gray-50 p-2 border border-gray-200 rounded-lg form-control" id="name" name="name" value="{{ old('name', $experience->name) }}">
                            
                        </div>
                        

                        <div class="mb-3 flex-col flex">
                            <label for="icon" class="form-label">Experience Image</label>
                            @if($experience->image)
                        <div class="mb-2">
                            <img src="{{ asset($experience->image) }}" alt="{{ $experience->name }}" width="100">
                        </div>
                        @endif
                            <input type="file" class="form-control border border-gray-200 p-2 bg-gray-50 rounded-lg" id="image" name="image" >
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Date Period</label>
                            <input type="text" class="bg-gray-50 rounded-lg p-2 border border-gray-200 form-control" id="date" name="date" value="{{ old('date', $experience->date) }}">
                            
                        </div>

                        <div class="mb-3 flex-col flex">
                            <label for="description" class="form-label">Overview</label>
                            <textarea class="border border-gray-200 p-2 bg-gray-50 rounded-lg form-control" id="overview" name="overview" rows="3" >{{ old('overview', $experience->overview) }}</textarea>
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="description" class="form-label">Goals And Motivation</label>
                            <textarea class="border border-gray-200 bg-gray-50 rounded-lg p-2 form-control" id="goals_motivation" name="goals_motivation" rows="3">{{ old('goals_motivation', $experience->goals_motivation) }}</textarea>         
                        </div>

                        

                        
                        <button type="submit">
                            <div
                                class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition transform duration-500">
                                Update
                            </div>
                        </button>
                    </form>
                </div>
            </section>



        </div>
    </div>
</body>

</html>