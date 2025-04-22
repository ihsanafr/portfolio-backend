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
        {{-- navbar --}}
        @include('frontend.layouts.bottomnav')
        {{-- navbar --}}
        <div class="h-[5rem]"></div>
        <!-- Project Section =================================  =================================  -->
        <section>
            <div
                class="drop-in hover:scale-110 transition duration-300 cursor-pointer shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center align-middle justify-center h-12 w-40  group p-2">
                <svg class="w-5 h-5  text-[#804CDF] transform" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                    <path
                        d="M15.7415 29.0725L15.7277 29.075L15.639 29.1187L15.614 29.1237L15.5965 29.1187L15.5077 29.075C15.4944 29.0708 15.4844 29.0729 15.4777 29.0812L15.4727 29.0937L15.4515 29.6287L15.4577 29.6537L15.4702 29.67L15.6002 29.7625L15.619 29.7675L15.634 29.7625L15.764 29.67L15.779 29.65L15.784 29.6287L15.7627 29.095C15.7594 29.0817 15.7523 29.0742 15.7415 29.0725ZM16.0727 28.9313L16.0565 28.9337L15.8252 29.05L15.8127 29.0625L15.809 29.0762L15.8315 29.6137L15.8377 29.6287L15.8477 29.6375L16.099 29.7537C16.1148 29.7579 16.1269 29.7546 16.1352 29.7437L16.1402 29.7262L16.0977 28.9587C16.0935 28.9437 16.0852 28.9346 16.0727 28.9313ZM15.179 28.9337C15.1735 28.9304 15.1669 28.9293 15.1606 28.9307C15.1543 28.9321 15.1488 28.9359 15.1452 28.9412L15.1377 28.9587L15.0952 29.7262C15.096 29.7412 15.1031 29.7513 15.1165 29.7563L15.1352 29.7537L15.3865 29.6375L15.399 29.6275L15.404 29.6137L15.4252 29.0762L15.4215 29.0613L15.409 29.0488L15.179 28.9337Z"
                        fill="#804CDF" />
                    <path
                        d="M13.2327 2.625C13.6752 2.18309 14.2672 1.92307 14.892 1.89623C15.5168 1.86938 16.129 2.07767 16.6077 2.48L16.7677 2.62625L19.1427 5H22.5002C23.1307 5.00012 23.7379 5.23847 24.2001 5.6673C24.6623 6.09613 24.9454 6.68377 24.9927 7.3125L25.0002 7.5V10.8575L27.3752 13.2325C27.8175 13.6751 28.0777 14.2673 28.1046 14.8924C28.1314 15.5175 27.9229 16.1299 27.5202 16.6088L27.374 16.7675L24.999 19.1425V22.5C24.9992 23.1307 24.7609 23.7382 24.3321 24.2007C23.9032 24.6632 23.3154 24.9464 22.6865 24.9938L22.5002 25H19.144L16.769 27.375C16.3264 27.8173 15.7341 28.0775 15.109 28.1044C14.484 28.1312 13.8715 27.9227 13.3927 27.52L13.234 27.375L10.859 25H7.50021C6.86949 25.0002 6.262 24.762 5.79952 24.3331C5.33705 23.9043 5.05376 23.3164 5.00646 22.6875L5.00021 22.5V19.1425L2.62521 16.7675C2.18295 16.325 1.9227 15.7327 1.89586 15.1076C1.86901 14.4825 2.07752 13.8701 2.48021 13.3913L2.62521 13.2325L5.00021 10.8575V7.5C5.00032 6.8695 5.23867 6.26232 5.6675 5.80011C6.09633 5.3379 6.68398 5.05479 7.31271 5.0075L7.50021 5H10.8577L13.2327 2.625ZM15.0002 4.395L12.6252 6.77C12.21 7.18457 11.6622 7.43988 11.0777 7.49125L10.8577 7.5H7.50021V10.8575C7.50036 11.4449 7.29369 12.0135 6.91646 12.4638L6.76771 12.6263L4.39271 15.0013L6.76771 17.375C7.18273 17.79 7.4385 18.3378 7.49021 18.9225L7.50021 19.1425V22.5H10.8577C11.4451 22.4999 12.0137 22.7065 12.464 23.0838L12.6265 23.2325L15.0002 25.6075L17.3752 23.2325C17.7902 22.8175 18.3381 22.5617 18.9227 22.51L19.1427 22.5H22.5002V19.1425C22.5001 18.5551 22.7067 17.9865 23.084 17.5363L23.2327 17.3738L25.6077 15L23.2327 12.625C22.8177 12.21 22.5619 11.6622 22.5102 11.0775L22.5002 10.8575V7.5H19.1427C18.5553 7.50015 17.9867 7.29349 17.5365 6.91625L17.374 6.7675L14.999 4.3925L15.0002 4.395ZM18.8502 11.23C19.0752 11.0058 19.377 10.8757 19.6944 10.866C20.0119 10.8563 20.3211 10.9678 20.5593 11.1778C20.7975 11.3879 20.9468 11.6807 20.977 11.9968C21.0071 12.313 20.9157 12.6288 20.7215 12.88L20.6165 12.9975L14.5165 19.0975C14.2783 19.336 13.9609 19.4787 13.6244 19.4985C13.288 19.5183 12.956 19.4139 12.6915 19.205L12.5715 19.0988L9.56646 16.0938C9.33989 15.8693 9.20767 15.5668 9.19685 15.2481C9.18604 14.9293 9.29745 14.6185 9.50829 14.3793C9.71913 14.14 10.0134 13.9904 10.331 13.961C10.6485 13.9316 10.9653 14.0247 11.2165 14.2213L11.334 14.325L13.544 16.535L18.8502 11.23Z"
                        fill="#804CDF" />
                </svg>
                <div class="w-2"></div>
                <p class="text-[#804CDF] font-medium text-md">Certifications</p>
            </div>
            <div class="h-5"></div>
            <div class="flex sm:flex-row flex-col justify-between ">
                <div>
                    <p class="drop-in-2 text-white mb-3 font-medium text-3xl">Transforming Ideas into <br> Impactful
                        Solutions</p>
                    <p class="drop-in-3 text-[#B4B4B4] font-normal text-md">I transform brilliant ideas into impactful
                        solutions
                        that<br class="hidden md:block">deliver real results and make a lasting difference.</p>
                </div>
                <div class="md:h-0 h-10"></div>
            </div>
            <div class="h-10"></div>
            <div class="grid drop-out md:grid-cols-2 gap-y-6 grid-cols-1 lg:grid-cols-3 gap-0 sm:gap-x-8">
                @foreach ($certificates as $certificate)
                <div class="hover:scale-105 transition duration-500">
                    <img class="rounded-lg md:w-full" src="{{ asset($certificate->image) }}" alt="" />
                    <div class="mt-4">
                        <p class="mb-2 font-normal text-sm text-green-400 ">{{ $certificate->date }}</p>
                        <h5 class="mb-1 text-md lg:text-lg font-medium tracking-tight text-white">{{ $certificate->name }}</h5>
                        <p class="mb-2 font-normal text-sm text-[#B3B3B3] ">{{ $certificate->organizer }}</p>
                        <a href="{{ $certificate->certificate_link }}" target="_blank"
                            class="inline-flex items-center text-sm font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300 ">
                            View Credentials
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