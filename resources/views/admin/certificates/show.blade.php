{{-- @extends('admin.layouts.app')

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
@endsection --}}


{{-- ========================================================= --}}

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
                <div class="flex justify-between items-center">
                    <a href="{{ route('admin.certificates.index') }}"
                        class="text-blue-500 font-semibold hover:text-blue-700 transform transition duration-500">Back</a>

                    <a href="{{ route('admin.certificates.edit', $certificate->id) }}">
                        <div
                            class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-5 rounded-lg transition transform duration-300 flex justify-center items-center gap-x-2">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                            </svg>
                            Edit
                        </div>
                    </a>
                </div>
                <div class="flex-col bg-white p-5 ">
                    <h3 class="font-bold text-2xl">Certificate Detail</h3>
                    <div class="h-5"></div>
                    <div class="bg-gray-50 rounded-lg shadow-xs p-5">
                        @if ($certificate->image)
                        <img class=" h-96" src="{{ asset($certificate->image) }}"
                            alt="{{ $certificate->name }}">
                        @endif
                        

                    </div>
                    <div class="h-10"></div>
                    <div class="bg-gray-50 rounded-lg shadow-xs p-5">
                        <p class="font-bold">Certificate Name :</p>
                        <p class="font-regular text-xl">{{$certificate->name}}</p>
                    </div>
                    <div class="h-5"></div>
                    <div class="bg-gray-50 rounded-lg shadow-xs p-5">
                        <p class="font-bold">Date Period :</p>
                        <p class="font-regular text-xl">{{$certificate->date}}</p>
                    </div>
                    <div class="h-5"></div>
                    <div class="bg-gray-50 rounded-lg shadow-xs p-5">
                        <p class="font-bold">Organizer :</p>
                        <p class="font-regular text-xl">{{$certificate->organizer}}</p>
                    </div>
                    <div class="h-5"></div>
                    <div class="bg-gray-50 rounded-lg shadow-xs p-5">
                        <p class="font-bold">Certificate Link :</p>
                        <a href="{{$certificate->certificate_link}}" class="text-blue-500" target="_blank">{{$certificate->certificate_link}}</a>
                    </div>
                    
                    
                    


                </div>
            </section>



        </div>
    </div>
    
</body>

</html>