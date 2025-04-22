{{-- @extends('admin.layouts.app')

@section('title', 'Experiences')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h1>Experiences</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
                Add New Experience
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
                        <th>Period</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $experience)
                    <tr>
                        <td>
                            @if($experience->image)
                                <img src="{{ asset($experience->image) }}" alt="{{ $experience->name }}" width="50">
                            @endif
                        </td>
                        <td>{{ $experience->name }}</td>
                        <td>
                            {{ $experience->date }}
                        </td>
                        <td>
                            <a href="{{ route('admin.experiences.show', $experience->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" class="d-inline">
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
@endsection --}}

{{-- ========================================================================== --}}

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
                <div class="flex flex-col gap-y-3">
                    <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-indigo-950">
                            Experiences
                        </h3>
                        <a href="{{ route('admin.experiences.create') }}">
                            <div class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-5 rounded-lg transition transform duration-300 flex justify-center items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M14 7.99805H8V13.998H6V7.99805H0V5.99805H6V-0.00195312H8V5.99805H14V7.99805Z" fill="white"/>
                                  </svg>
                                  Create</div>
                        </a>
                    </div>
                    <div class="flex flex-col bg-white rounded-2xl p-5 ">
                        <table class="">
                            <thead class="mb-10">
                                <tr class="flex flex-row items-center grid grid-cols-4 mb-5 gap-5 justify-between">
                                    <th class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-semibold text-base">Image</p>
                                    </th>
                                    <th class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-semibold text-base">Name</p>
                                    </th>
                                    <th class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-semibold text-base">Date</p>
                                    </th>
                                    <th class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-semibold text-base">Actions</p>
                                    </th>
                                </tr>

                            </thead>
                            <tbody class="flex-col">
                                @forelse ($experiences as $experience)
                                <tr class="flex flex-row items-center mb-5 grid grid-cols-4 gap-5  justify-between">
                                    <td class="flex flex-row gap-x-3 ">
                                        @if($experience->image)
                                        <img src="{{ asset($experience->image) }}" 
                                            class="w-24 " alt="{{ $experience->name }}">
                                            @endif
                                    </td>
                                    <td class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-medium text-left text-base">{{ $experience->name }}</p>
                                    </td>
                                    <td class="flex flex-row gap-x-3 items-center">
                                        <p class="text-indigo-950 font-medium text-left text-base">{{ $experience->date }}</p>
                                    </td>
                                    
                                    
                                    
                                    <td class="flex flex-row gap-x-3 items-center">
                                        <a href="{{ route('admin.experiences.edit', $experience->id)}}" class="flex gap-x-2">
                                            <div
                                                class="bg-blue-500 hover:bg-blue-700 transform duration-500 rounded-lg w-fit p-3">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="{{ route('admin.experiences.show', $experience->id)}}" class="flex gap-x-2">
                                            <div
                                                class="bg-teal-500 hover:bg-teal-700 transform duration-500 rounded-lg w-fit p-3">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2"
                                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                                    <path stroke="currentColor" stroke-width="2"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>

                                            </div>
                                        </a>
                                        <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex gap-x-2">
                                                <div
                                                    class="bg-red-500 hover:bg-red-700 transform duration-500 rounded-lg w-fit p-3">
                                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                    </svg>
    
                                                </div>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <span>no experiences found</span>
                                    </tr>
                                @endforelse

                                
                                
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>



        </div>
    </div>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btndropdown = document.getElementById('btn-dropdown');
            const dropdownmenu = document.getElementById('dropdown-menu');

            btndropdown.addEventListener("click", function () {
                dropdownmenu.classList.toggle("hidden");
            });

            document.addEventListener("click", function (event) {
                if (!btndropdown.contains(event.target) && !dropdownmenu.contains(event.target)) {
                    dropdownmenu.classList.add("hidden");
                }
            });
        });
    </script> --}}
</body>

</html>