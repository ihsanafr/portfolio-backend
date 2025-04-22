<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/experience-lists.css">
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
        <!-- Experience Section =================================  =================================  -->
        <section>
            <div
                class="drop-in hover:scale-110 transition duration-300 cursor-pointer shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center justify-center h-12 w-36  group p-2">
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
                    <p class="drop-in-2 text-white mb-3 font-medium text-2xl md:text-3xl">Years of experience driving<br>innovation</p>
                    <p class="drop-in-3 text-[#B4B4B4] font-normal text-md">With years of experience, I specialize in driving
                        innovation<br class="hidden md:block">and creating impactful solutions.</p>
                </div>
                <div class="md:h-0 h-10"></div>

            </div>
            <div class="h-[5rem]"></div>
            <div class="drop-up">
                @foreach ($experiences as $experience)
                <div
                class="hover:scale-105 transition duration-500 flex mb-10 flex-col items-center  rounded-lg shadow-sm md:flex-row ">
                <img class="object-cover w-full md:h-32  md:w-48 rounded-lg"
                    src="assets/projects/thumbnail.png" alt="">
                <div class="w-10"></div>
                <div class="flex flex-col justify-between">
                    <p class="mb-1 font-normal dark:text-green-500">{{$experience->date}}</p>
                    <h5 class="mb-1 text-lg md:text-xl font-medium tracking-tight text-gray-900 dark:text-white">{{$experience->name}} </h5>
                    <p class="text-md font-normal dark:text-gray-400">{{ $experience->overview }}</p>
                        <a href="{{ route('frontend.experiences.show', $experience->id) }}" class="inline-flex items-center text-md font-medium text-center text-[#A259FF] hover:text-[#602EA0] transition duration-300">
                            Read more
                        </a>
                </div>
            </div>
                @endforeach
                
                
                
    
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