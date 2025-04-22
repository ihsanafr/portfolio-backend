<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css">
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

        {{-- navbar --}}
        @include('frontend.layouts.bottomnav')
        {{-- navbar --}}
        <!-- hero section =================================  ================================= -->
        <section class="flex items-center max-w-screen-lg justify-between mx-auto h-[40rem] mb-[10rem]">
            <div class="tagline">
                <div class="drop-in-2">
                    <div
                    class="flex md:scale-125 md:hover:scale-150 lg:hover:scale-105 hover:scale-105 transition duration-500 md:ml-8 lg:ml-0 lg:scale-100 bg-[#092213] gap-x-5 p-3 rounded-2xl w-56 justify-center items-center">
                    <div class="w-3 h-3 bg-green-400 rounded-full glowing"></div>
                    <p class="text-[#00C80D] ">Available For Works</p>
                </div>
                <div class="h-3"></div>
                <p class=" gradient-text w-[25rem] md:w-[40rem] p-1 text-4xl md:text-6xl lg:text-6xl py-4  font-medium">"Turn
                    Creativity into Digital Reality"</p>
                </div>
                
                <div class=" h-5 md:h-8 lg:h-10"></div>
                <div>
                    <p class="text-white drop-in-3 text-2xl md:text-4xl lg:text-3xl font-semibold ">Ihsan Ahmad Fakhriansyah</p>
                    <p class="text-white drop-in-4 text-lg md:text-3xl lg:text-2xl font-medium">Fullstack Developer Enthusiast</p>
                </div>
                <div class="h-6"></div>
                <div>
                    <div class="flex space-x-3 drop-in-5">
                        <a href="#"
                            class="group inline-flex items-center bg-[#804CDF] hover:bg-[#502F8C] text-white font-medium py-2 px-5 rounded-xl gap-x-2 transition duration-300 ">
                            About Me

                        </a>
                        <a href="#"
                            class="group inline-flex items-center border border-white text-white font-medium py-2 px-5 rounded-xl gap-x-2 transition duration-300 hover:bg-[#302742] ">
                            Read CV
                            <!-- Ikon panah -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="transform duration-300 group-hover:rotate-[45deg] "
                                width="15" height="15" viewBox="0 0 19 19" fill="none">
                                <path
                                    d="M18.8963 1.90117C18.9182 1.27463 18.428 0.748988 17.8015 0.727109L7.59152 0.370568C6.96499 0.348689 6.43934 0.838859 6.41746 1.46539C6.39558 2.09193 6.88575 2.61757 7.51229 2.63945L16.5878 2.95638L16.2709 12.0319C16.249 12.6584 16.7392 13.1841 17.3657 13.206C17.9923 13.2278 18.5179 12.7377 18.5398 12.1111L18.8963 1.90117ZM1.93236 18.1749L18.536 2.69173L16.9877 1.03137L0.384044 16.5145L1.93236 18.1749Z"
                                    fill="white" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
            <img src="assets/img-landing/profile.png" class="h-[30rem] drop-out hidden lg:block" alt="">
        </section>
        <!-- hero section =================================  ================================= -->

        <!-- bento section =================================  ================================= -->
        <section class="bento-grid flex-col max-w-screen-lg" >
            <div 
                class="atas flex flex-col md:flex-row justify-between h-[70rem] md:h-[23rem] lg:max-h-[20rem] grid-rows-3 max-w-screen-lg">
                <div data-animation="slideInUp" data-animation-delay="0.2s"
                    class="border border-[#370063] rounded-2xl profile bg-[url('assets/img-landing/profile-2.png')] bg-center w-full md:w-[23rem] h-[23rem]   lg:w-[20rem] lg:h-[20rem] bg-cover">
                </div>
                <div data-animation="slideInUp" data-animation-delay="0.4s"
                    class=" maps-about lg:w-[20rem] lg:h-[20rem] md:h-[23rem] h-[19rem] flex flex-col justify-between lg:max-h-[20rem] ">
                    <div
                        class="bg-[url('assets/img-landing/maps.png')] border border-[#370063] rounded-2xl md:w-[23rem] md:h-[16rem] lg:h-[13rem] lg:w-[20rem] h-[13rem] bg-cover bg-center flex justify-end pt-[3rem] pr-[8rem] md:pt-[4rem] md:pr-[7rem]  lg:pt-[3rem]  lg:pr-[6rem]">
                        <div class="w-8 h-8 bg-[#00cd5c]  rounded-full glowing"></div>
                    </div>
                    <a href=""
                        class="flex items-center justify-between bg-[#0F001C] h-[5rem] px-5 border border-[#370063] group hover:bg-[#1A032E] transition duration-300 rounded-2xl">
                        <p class="text-white text-xl">More About Me</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="transform duration-300 h-5 group-hover:rotate-[45deg] " viewBox="0 0 19 19"
                            fill="none">
                            <path
                                d="M18.8963 1.90117C18.9182 1.27463 18.428 0.748988 17.8015 0.727109L7.59152 0.370568C6.96499 0.348689 6.43934 0.838859 6.41746 1.46539C6.39558 2.09193 6.88575 2.61757 7.51229 2.63945L16.5878 2.95638L16.2709 12.0319C16.249 12.6584 16.7392 13.1841 17.3657 13.206C17.9923 13.2278 18.5179 12.7377 18.5398 12.1111L18.8963 1.90117ZM1.93236 18.1749L18.536 2.69173L16.9877 1.03137L0.384044 16.5145L1.93236 18.1749Z"
                                fill="white" />
                        </svg>
                    </a>

                </div>
                <div data-animation="slideInUp" data-animation-delay="0.6s"
                    class="sosmed-projects md:hidden lg:flex  lg:w-[20rem] h-[21rem] lg:h-[20rem] flex flex-col justify-between ">
                    <div class="flex justify-between">
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300  p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-github.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300 p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-linkedin.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300 p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-gmail.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                    </div>
                    <div
                        class="bg-[#0F001C] lg:w-[20rem] h-[13rem] flex flex-col justify-between p-4 border border-[#370063] rounded-2xl">
                        <div class="flex justify-between">
                            <p class="text-white">Certifications</p>
                            <a href="#" class="inline-flex items-center text-xs font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300 ">
                                View more
                                <svg class="rtl:rotate-180 w-3 h-3 font-medium ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                        <div
                            class="w-full h-[6rem] overflow-hidden relative [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">

                            <div
                                class="flex justify-center h-full align-middle items-center animate-infinite-scroll [&_li]:mx-8 [&_img]:max-w-none">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail.png" alt="">
                            </div>
                        </div>
                        <p class="text-white text-xs">I’m familiar with several tool stacks that I’m currently refining,
                            familiar with several tool</p>
                    </div>
                </div>

            </div>
            <div class="h-8"></div>
            <div data-animation="slideInUp" data-animation-delay="0.2s" class="bawah flex md:justify-between">
                <div
                    class="sosmed-projects hidden md:block lg:hidden  h-[30rem] w-[23rem] flex flex-col justify-between ">
                    <div class="flex justify-between">
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300 p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-github.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300 p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-linkedin.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                        <a href="" class="flex items-center justify-between bg-[#0F001C] hover:bg-[#1A032E] transition duration-300 p-5 border border-[#370063] rounded-2xl">
                            <img src="assets/icon/ic-gmail.png" class="w-[4rem] lg:w-[3rem]" alt="">

                        </a>
                    </div>
                    <div class="h-5"></div>
                    <div
                        class="bg-[#0F001C] lg:w-[20rem] h-[13rem] flex flex-col justify-between p-4 border border-[#370063] rounded-2xl">
                        <div class="flex justify-between">
                            <p class="text-white">Certifications</p>
                            <a href="#" class="inline-flex items-center text-xs font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300 ">
                                View more
                                <svg class="rtl:rotate-180 w-3 h-3 font-medium ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                        <div
                            class="w-full h-[6rem] overflow-hidden relative [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">

                            <div
                                class="flex justify-center h-full align-middle items-center animate-infinite-scroll [&_li]:mx-8 [&_img]:max-w-none">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail1.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail1.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail1.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail1.png" alt="">
                                <img class="h-[6rem] rounded-lg mr-2" src="assets/projects/thumbnail1.png" alt="">
                            </div>
                        </div>
                        <p class="text-white text-xs">I’m familiar with several tool stacks that I’m currently refining,
                            familiar with several tool</p>
                    </div>

                </div>
                <div data-animation="slideInUp" data-animation-delay="0.6s"
                    class="flex-col lg:flex-row flex md:h-[27rem] md:w-[23rem] w-full lg:w-full lg:h-[10rem] max-w-screen-lg justify-between">
                    <div
                        class="bg-[#0F001C] lg:w-[31rem] h-[13rem] flex flex-col justify-between p-4 border border-[#370063] rounded-2xl">
                        <div class="flex justify-between">
                            <p class="text-white">Techstacks</p>
                            <a href="#" class="inline-flex items-center text-xs font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300 ">
                                View more
                                <svg class="rtl:rotate-180 w-3 h-3 font-medium ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>

                        </div>
                        <div
                            class="w-full h-[3rem] overflow-hidden relative [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">

                            <div
                                class="flex justify-center h-full align-middle items-center animate-infinite-scroll [&_li]:mx-8 [&_img]:max-w-none">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-flutter.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-github.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-gpt.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-laravel.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-notion.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-react.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-vue.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-flutter.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-github.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-gpt.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-laravel.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-notion.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-react.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-vue.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-flutter.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-github.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-gpt.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-laravel.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-notion.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-react.png" alt="">
                                <img class="h-[3rem] rounded-lg mr-5" src="assets/icon/ic-vue.png" alt="">
                            </div>
                        </div>
                        <p class="text-white text-xs">I’m familiar with several tool stacks that I’m currently refining,
                            familiar with several tool</p>
                    </div>
                    <div data-animation="slideInUp" data-animation-delay="0.8s"
                        class="bg-[#0F001C] lg:w-[31rem] h-[13rem] flex flex-col justify-between p-4 border border-[#370063] rounded-2xl">
                        <div class="flex justify-between">
                            <p class="text-white">Education</p>
                        </div>
                        <div class="w-full h-14 overflow-hidden relative">
                            <div class="flex justify-start align-middle items-center ">
                                <img src="assets/img-landing/idn.png" class="w-28" alt="">
                                <div class="w-3"></div>
                                <div>
                                    <p class="text-green-500 text-xs">2020 - Now</p>
                                    <p class="text-white font-medium text-sm">Stundent At IDN Boarding School</p>
                                    <p class="text-white font-normal text-xs">Software Engineer</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-white text-xs">I’m familiar with several tool stacks that I’m currently refining,
                            familiar with several tool</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- bento section =================================  ================================= -->
        <div class="h-[12rem]"></div>
        <!-- Project Section =================================  =================================  -->
        <section>
            <div data-animation="slideInRight" data-animation-delay="0.2s"
                class=" hover:scale-110 transition duration-300 shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center justify-center h-12 w-28  group p-2">
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
                    <p data-animation="slideInRight" data-animation-delay="0.4s" class="text-white mb-3 font-medium text-3xl">Transforming Ideas into <br> Impactful Solutions</p>
                    <p data-animation="slideInRight" data-animation-delay="0.6s" class="text-[#B4B4B4] font-normal text-md">I transform brilliant ideas into impactful solutions
                        that<br class="hidden md:block">deliver real results and make a lasting difference.</p>
                </div>
                <div class="md:h-0 h-10"></div>
                <a data-animation="slideInLeft" data-animation-delay="0.2s" href="{{ route('frontend.projects.index') }}"
                    class="group inline-flex justify-center align-middle items-center w-48 h-10 border border-white text-white font-medium py-2 px-5 rounded-xl gap-x-2 transition duration-300 hover:bg-[#302742] ">
                    Discover More
                    <!-- Ikon panah -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="transform duration-300 group-hover:rotate-[45deg] " ml-1"
                        width="15" height="15" viewBox="0 0 19 19" fill="none">
                        <path
                            d="M18.8963 1.90117C18.9182 1.27463 18.428 0.748988 17.8015 0.727109L7.59152 0.370568C6.96499 0.348689 6.43934 0.838859 6.41746 1.46539C6.39558 2.09193 6.88575 2.61757 7.51229 2.63945L16.5878 2.95638L16.2709 12.0319C16.249 12.6584 16.7392 13.1841 17.3657 13.206C17.9923 13.2278 18.5179 12.7377 18.5398 12.1111L18.8963 1.90117ZM1.93236 18.1749L18.536 2.69173L16.9877 1.03137L0.384044 16.5145L1.93236 18.1749Z"
                            fill="white" />
                    </svg>
                </a>

            </div>
            <div class="h-10"></div>
            <div data-animation="slideInUp" data-animation-delay="0.2s" class="grid drop-up md:grid-cols-2 gap-y-6 grid-cols-1 lg:grid-cols-3 gap-0 sm:gap-x-8">
                @forelse ($featuredProjects as $project)
                <div class="hover:scale-105 transition duration-500">
                    <img class="rounded-lg md:w-full" src="{{ asset($project->image) }}" alt="" />
                    <div class="mt-4">

                        <h5 class="mb-1 text-md lg:text-lg font-medium tracking-tight text-white">{{ $project->title }}</h5>

                        <p class="mb-2 font-normal text-sm text-[#B3B3B3] ">{{ $project->overview }}</p>
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
                @empty
                    
                @endforelse
                
                


            </div>
        </section>
        <!-- Project Section =================================  =================================  -->
        <div class="h-[12rem]"></div>

        <!-- Experience Section =================================  =================================  -->
        <section>
            <div data-animation="slideInRight" data-animation-delay="0.2s"
                class=" hover:scale-110 transition duration-300 shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center justify-center h-12 w-36  group p-2">
                <svg class="w-5 h-5 mb-1 text-white  "
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M14.361 4.07921C14.361 4.07921 14.476 6.04921 16.214 7.78621C17.952 9.52421 19.921 9.64021 19.921 9.64021L20.848 8.71321C21.5855 7.97577 21.9998 6.9756 21.9998 5.93271C21.9998 4.88982 21.5855 3.88964 20.848 3.15221C20.1106 2.41477 19.1104 2.00049 18.0675 2.00049C17.0247 2.00049 16.0245 2.41477 15.287 3.15221L14.36 4.07921L12 6.43921M19.921 9.63921L14.661 14.9012L11.56 18.0002L11.4 18.1612C10.822 18.7382 10.533 19.0272 10.215 19.2752C9.83957 19.5678 9.43354 19.8189 9.00404 20.0242C8.64004 20.1972 8.25304 20.3262 7.47804 20.5842L4.19704 21.6782M4.19704 21.6782L3.39504 21.9462C3.2081 22.0089 3.00737 22.0182 2.81543 21.9731C2.62349 21.9279 2.44794 21.8302 2.30851 21.6907C2.16909 21.5513 2.07132 21.3758 2.02619 21.1838C1.98106 20.9919 1.99036 20.7912 2.05304 20.6042L2.32104 19.8022M4.19704 21.6782L2.32104 19.8022M2.32104 19.8022L3.41504 16.5212C3.67304 15.7462 3.80204 15.3592 3.97504 14.9952C4.18104 14.5639 4.43071 14.1602 4.72404 13.7842C4.97204 13.4662 5.26104 13.1772 5.83804 12.6002L8.50004 9.93921"
                                    stroke="#804CDF" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                <div class="w-2"></div>
                <p class="text-[#804CDF] font-medium text-md">Experience</p>
            </div>
            <div class="h-5"></div>
            <div  class="flex sm:flex-row flex-col justify-between ">
                <div>
                    <p data-animation="slideInRight" data-animation-delay="0.4s" class="text-white mb-3 font-medium text-2xl md:text-3xl">Years of experience driving<br>innovation</p>
                    <p data-animation="slideInRight" data-animation-delay="0.6s" class="text-[#B4B4B4] font-normal text-md">With years of experience, I specialize in driving
                        innovation<br class="hidden md:block">and creating impactful solutions.</p>
                </div>
                <div class="md:h-0 h-10"></div>
                <a data-animation="slideInLeft" data-animation-delay="0.2s" href="{{ route('frontend.experiences.index') }}"
                    class="group inline-flex justify-center align-middle items-center w-48 h-10 border border-white text-white font-medium py-2 px-5 rounded-xl gap-x-2 transition duration-300 hover:bg-[#302742] ">
                    Discover More
                    <!-- Ikon panah -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="transform duration-300 group-hover:rotate-[45deg] " ml-1"
                        width="15" height="15" viewBox="0 0 19 19" fill="none">
                        <path
                            d="M18.8963 1.90117C18.9182 1.27463 18.428 0.748988 17.8015 0.727109L7.59152 0.370568C6.96499 0.348689 6.43934 0.838859 6.41746 1.46539C6.39558 2.09193 6.88575 2.61757 7.51229 2.63945L16.5878 2.95638L16.2709 12.0319C16.249 12.6584 16.7392 13.1841 17.3657 13.206C17.9923 13.2278 18.5179 12.7377 18.5398 12.1111L18.8963 1.90117ZM1.93236 18.1749L18.536 2.69173L16.9877 1.03137L0.384044 16.5145L1.93236 18.1749Z"
                            fill="white" />
                    </svg>
                </a>

            </div>
            <div class="h-[5rem]"></div>
            <div data-animation="slideInUp" data-animation-delay="0.2s">
                @forelse ($featuredExperiences as $experiences)
                <div
                class="hover:scale-105 transition duration-500 flex mb-10 flex-col items-center  rounded-lg shadow-sm md:flex-row ">
                <img class="object-cover w-full md:h-32  md:w-48 rounded-lg"
                    src="{{ asset($experiences->image) }}" alt="">
                <div class="w-10"></div>
                <div class="flex flex-col justify-between">
                    <p class="mb-1 font-normal dark:text-green-500">{{ $experiences->date }}</p>
                    <h5 class="mb-1 text-lg md:text-xl font-medium tracking-tight text-gray-900 dark:text-white">{{ $experiences->name }} </h5>
                    <p class="text-md font-normal dark:text-gray-400">{{ $experiences->overview }}</p>
                        <a href="{{ route('frontend.experiences.show', $experiences->id) }}" class="inline-flex items-center text-md font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300">
                            Read more
                        </a>
                </div>
            </div>
                @empty
                    
                @endforelse
                
                
                
    
            </div>
        </section>
        <!-- Experience Section =================================  =================================  -->
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
    <script>
       

        const AnimateOnScroll = function ({
            offset
        } = {
            offset: 10
        }) {
            // Define a dobra superior, inferior e laterais da tela
            const windowTop = (offset * window.innerHeight) / 100;
            const windowBottom = window.innerHeight - windowTop;
            const windowLeft = 0;
            const windowRight = window.innerWidth;

            this.start = (element) => {
                window.requestAnimationFrame(() => {
                    // Seta os atributos customizados
                    element.style.animationDelay = element.dataset.animationDelay;
                    element.style.animationDuration = element.dataset.animationDuration;

                    // Inicia a animacao setando a classe para animar
                    element.classList.add(element.dataset.animation);

                    // Seta o elemento como animado
                    element.dataset.animated = "true";
                });
            };

            this.inViewport = (element) => {
                // Obtem o boundingbox do elemento
                const elementRect = element.getBoundingClientRect();
                const elementTop =
                    elementRect.top + parseInt(element.dataset.animationOffset) ||
                    elementRect.top;
                const elementBottom =
                    elementRect.bottom - parseInt(element.dataset.animationOffset) ||
                    elementRect.bottom;
                const elementLeft = elementRect.left;
                const elementRight = elementRect.right;

                // Verifica se o elemento esta na tela
                return (
                    elementTop <= windowBottom &&
                    elementBottom >= windowTop &&
                    elementLeft <= windowRight &&
                    elementRight >= windowLeft
                );
            };

            // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
            this.verifyElementsInViewport = (els = elements) => {
                for (let i = 0, len = els.length; i < len; i++) {
                    // Passa para o proximo laço se o elemento ja estiver animado
                    if (els[i].dataset.animated) continue;

                    this.inViewport(els[i]) && this.start(els[i]);
                }
            };

            // Obtem todos os elementos a serem animados
            this.getElements = () =>
                document.querySelectorAll("[data-animation]:not([data-animated])");

            // Atualiza a lista de elementos a serem animados
            this.update = () => {
                elements = this.getElements();
                elements && this.verifyElementsInViewport(elements);
            };

            // Inicia os eventos
            window.addEventListener("load", this.update, false);
            window.addEventListener(
                "scroll",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
            window.addEventListener(
                "resize",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
        };

        // Initialize
        const options = {
            offset: 15 // percentage of the window
        };

        const animation = new AnimateOnScroll(options);

        // fade in on scrool bawah ================================= end

    </script>
    </main>
</body>

</html>