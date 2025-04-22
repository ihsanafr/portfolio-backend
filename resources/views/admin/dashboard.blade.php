{{-- @extends('admin.layouts.app')


@section('title', 'Dashboard')

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
@endsection --}}


{{-- ======================================================================= --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">
</head>

<body class="font-['General Sans'] bg-[#f5f5f5]">

    <div class="flex flex-row justify-start">
       {{-- Sidebar --}}
       @include('admin.layouts.sidebar')

        <div class="flex-auto w-screen lg:pl-[250px]">

            @include('admin.layouts.header')
            <section class="header px-7 pt-10">
                <div
                    class="flex flex-col bg-white p-10 rounded-xl gap-y-5 md:flex-row md:items-center justify-start md:justify-between header-section w-full">
                    <div class="title">
                        <h1 class="text-3xl text-indigo-950 font-bold mb-1">
                            Hello!, Welcome To Admin Dashboard
                        </h1>
                        <p class="text-md text-gray-500">
                            You have total {{ array_sum($count) }} items in your portfolio.
                        </p>
                    </div>

                </div>
            </section>

            <section class="stats pt-5 px-7">
                <h3 class="text-xl font-semibold text-indigo-950 mb-3">
                    Statistics
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-x-7 gap-y-7">
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-violet-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.02 2.83992L3.63 7.03992C2.73 7.73992 2 9.22992 2 10.3599V17.7699C2 20.0899 3.89 21.9899 6.21 21.9899H17.79C20.11 21.9899 22 20.0899 22 17.7799V10.4999C22 9.28992 21.19 7.73992 20.2 7.04992L14.02 2.71992C12.62 1.73992 10.37 1.78992 9.02 2.83992Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.5 18H13.5C15.15 18 16.5 16.65 16.5 15V12C16.5 10.35 15.15 9 13.5 9H10.5C8.85 9 7.5 10.35 7.5 12V15C7.5 16.65 8.85 18 10.5 18Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 9V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.5 13.5H16.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>

                        </div>
                        <h3 class="text-3xl text-indigo-950 font-bold">
                            {{ $count['techstacks'] }}
                        </h3>
                        <p class="text-md text-gray-500">
                            Techstacks
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-blue-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.96 6.17004C18.96 7.56004 20.34 9.77004 20.62 12.32" stroke="#fff"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.48999 12.37C3.74999 9.82997 5.10999 7.61997 7.08999 6.21997"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M8.19 20.9399C9.35 21.5299 10.67 21.8599 12.06 21.8599C13.4 21.8599 14.66 21.5599 15.79 21.0099"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12.06 7.70001C13.5954 7.70001 14.84 6.45537 14.84 4.92001C14.84 3.38466 13.5954 2.14001 12.06 2.14001C10.5247 2.14001 9.28003 3.38466 9.28003 4.92001C9.28003 6.45537 10.5247 7.70001 12.06 7.70001Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M4.82999 19.92C6.36534 19.92 7.60999 18.6753 7.60999 17.14C7.60999 15.6046 6.36534 14.36 4.82999 14.36C3.29464 14.36 2.04999 15.6046 2.04999 17.14C2.04999 18.6753 3.29464 19.92 4.82999 19.92Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M19.17 19.92C20.7054 19.92 21.95 18.6753 21.95 17.14C21.95 15.6046 20.7054 14.36 19.17 14.36C17.6347 14.36 16.39 15.6046 16.39 17.14C16.39 18.6753 17.6347 19.92 19.17 19.92Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>

                        </div>
                        <h3 class="text-3xl text-indigo-950 font-bold">
                            {{ $count['projects'] }}
                        </h3>
                        <p class="text-md text-gray-500">
                            Projects
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-orange-500 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.17004 7.43994L12 12.5499L20.77 7.46991" stroke="#fff    "
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 21.6099V12.5399" stroke="#fff  " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9.92999 2.48L4.59 5.45003C3.38 6.12003 2.39001 7.80001 2.39001 9.18001V14.83C2.39001 16.21 3.38 17.89 4.59 18.56L9.92999 21.53C11.07 22.16 12.94 22.16 14.08 21.53L19.42 18.56C20.63 17.89 21.62 16.21 21.62 14.83V9.18001C21.62 7.80001 20.63 6.12003 19.42 5.45003L14.08 2.48C12.93 1.84 11.07 1.84 9.92999 2.48Z"
                                        stroke="#fff    " stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M17 13.24V9.58002L7.51001 4.09998" stroke="#fff    " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>

                        </div>
                        <h3 class="text-3xl text-indigo-950 font-bold">
                            {{ $count['experiences'] }}
                        </h3>
                        <p class="text-md text-gray-500">
                            Experiences
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-cyan-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 13H15" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 17H12" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                        stroke="#fff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>

                        </div>
                        <h3 class="text-3xl text-indigo-950 font-bold">
                            {{$count['certificates']}}
                        </h3>
                        <p class="text-md text-gray-500">
                            Certificates
                        </p>
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
