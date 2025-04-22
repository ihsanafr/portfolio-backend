<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/project-lists.css">
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">
    <title>Ihsan - Portofolio</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {

                    animation: {
                        'infinite-scroll': 'infinite-scroll 20s linear infinite',
                    },
                    keyframes: {
                        'infinite-scroll': {
                            from: {
                                transform: 'translateX(0)'
                            },
                            to: {
                                transform: 'translateX(-100%)'
                            },
                        }
                    }
                },
            },
        };
    </script>
</head>

<body class="bg-[url('assets/background/BG.png')]">
    <main class="max-w-screen-lg mx-5 md:mx-10 lg:mx-auto ">
        @include('frontend.layouts.bottomnav')

        <div class="h-[5rem]"></div>
        <!-- Project Section =================================  =================================  -->
        <section>
            <div
                class="drop-in hover:scale-110 transition duration-300 cursor-pointer shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center justify-center h-12 w-28  group p-2">
                <svg class="w-5 h-5 mb-1 text-[#804CDF]  transform " xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M19.898 16H7.898C6.968 16 6.503 16 6.121 16.102C5.61231 16.2384 5.14849 16.5063 4.77618 16.8788C4.40386 17.2513 4.13616 17.7152 4 18.224"
                        stroke="#804CDF" stroke-width="1.5" />
                    <path
                        d="M8 7H16M8 10.5H13M10 22C7.172 22 5.757 22 4.879 21.121C4 20.243 4 18.828 4 16V8C4 5.172 4 3.757 4.879 2.879C5.757 2 7.172 2 10 2H14C16.828 2 18.243 2 19.121 2.879C20 3.757 20 5.172 20 8M14 22C16.828 22 18.243 22 19.121 21.121C20 20.243 20 18.828 20 16V12"
                        stroke="#804CDF" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <div class="w-2"></div>
                <p class="text-[#804CDF] font-medium text-md">Projects</p>
            </div>
            <div class="h-5"></div>
            <div class="flex sm:flex-row flex-col justify-between ">
                <div>
                    <p class="drop-in-2 text-white mb-3 font-medium text-3xl">Transforming Ideas into <br> Impactful Solutions</p>
                    <p class="drop-in-3 text-[#B4B4B4] font-normal text-md">I transform brilliant ideas into impactful solutions
                        that<br class="hidden md:block">deliver real results and make a lasting difference.</p>
                </div>
                <div class="md:h-0 h-10"></div>

            </div>
            <div class="h-10"></div>
            <div class="grid drop-out md:grid-cols-2 gap-y-6 grid-cols-1 lg:grid-cols-3 gap-0 sm:gap-x-8">
                @foreach ($projects as $project)
                <div class="hover:scale-105 transition duration-500">
                    <img class="rounded-lg md:w-full" src="{{ asset($project->image) }}" alt="" />
                    <div class="mt-4">
                        <h5 class="mb-1 text-md lg:text-lg font-medium tracking-tight text-white">{{ $project->name }}</h5>
                        <p class="mb-2 font-normal text-sm text-[#B3B3B3] ">Choose a learning category that suits your
                            interests for your future career</p>
                            
                        <a href="{{ route('frontend.projects.show', $project) }}" class="inline-flex items-center text-sm font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300 ">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
                
                


            </div>
        </section>
        <!-- Project Section =================================  =================================  -->

        
        <div class="h-[12rem]"></div>

        <!-- Footer Section =================================  =================================  -->
        <section>
            <div class="w-full flex items-center justify-between bg-[#ffffff0c] px-4 sm:px-5 py-4 rounded-2xl">
                <!-- Name (visible on desktop) -->
                <p class="text-xl hidden md:block font-medium text-white">Ihsan Ahmad Fakhriansyah</p>
    
                <!-- Social Media Icons -->
                <div class="flex w-full md:w-auto gap-2 justify-center items-center">
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="assets/icon/ic-github.png" alt="Github"> Github
                    </a>
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="assets/icon/ic-linkedin.png" alt="LinkedIn"> Linkedin
                    </a>
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="assets/icon/ic-gmail.png" alt="Gmail"> Gmail
                    </a>
                </div>
            </div>
        </section>
        <div class="h-5"></div>
        <p class="text-white text-lg flex justify-center opacity-70">© 2025 ihsanafrr. All Rights Reserved.</p>
        <div class="h-32"></div>
        <!-- Footer Section =================================  =================================  -->
         
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </main>
</body>

</html>