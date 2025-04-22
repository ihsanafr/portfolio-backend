<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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

<body class="bg-[url('{{ asset('assets/background/BG.png') }}')]">
    <main class="max-w-screen-lg mx-5 md:mx-10 lg:mx-auto ">
        {{-- navbar --}}
        @include('frontend.layouts.bottomnav')
        {{-- navbar --}}
        <div class="h-[6rem]"></div>

        <div>
            <p class="text-white text-2xl md:text-4xl font-medium">{{$project->type}}</p>
            <div class="h-[1rem]"></div>
            <p class="text-white text-xl md:text-3xl font-semibold">{{$project->name}}</p>
        </div>
        <div class="h-[3rem]"></div>


        <section class=" max-w-screen-lg bg-center h-[30rem] bg-cover"  style="background-image: url('{{ asset($project->image) }}')">
        </section>



        <div class="h-[3rem]"></div>


        <div class="flex flex-col md:flex-row max-w-screen-lg gap-8">
            <div class="flex w-full  shadow-[#804CDF] flex-col rounded-xl">
                <div class="flex flex-col">
                    <p class="text-white font-semibold text-xl">Overview</p>
                    <div class="h-[1rem]"></div>
                    <p class="text-sm font-light text-white">{{$project->overview}} </p>
                </div>
                <div class="h-[2rem]"></div>
                <div class="flex flex-col">
                    <p class="text-white font-semibold text-xl">Goals & Motivation</p>
                    <div class="h-[1rem]"></div>
                    <p class="text-sm font-light text-white">{{$project->goals_motivation}}</p>


                </div>
            </div>
            <div class="flex grid grid-rows-2 flex-col">
                <p class="text-white font-semibold text-xl">Techstacks</p>
                <div class="h-[1rem]"></div>
                <div class="flex flex-col gap-5 max-w-[20rem] md:max-w-screen-lg">
                    @foreach ($project->techstacks as $techstack)
                    {{-- @foreach ($techstacks as $techstack) --}}
                <div
                class="flex w-full justify-between shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] hover:bg-[#A675FF30] transition cursor-pointer duration-300 flex rounded-xl items-center justify-center px-[1rem] py-[1rem]">
                @if($techstack->icon)
                <img src="{{ asset($techstack->icon) }}" alt="{{ $techstack->name }}" class="img-thumbnail" width="50">
                @else
                <span class="text-muted">No icon</span>
                @endif
                <div class="w-[2rem]"></div>
                <div class="flex flex-col">
                    <p class="text-white font-medium text-lg">{{ $techstack->name }}</p>
                    <p class="text-white font-regular text-xs">{{ $techstack->description }}</p>

                </div>
            </div>
                @endforeach

                </div>


            </div>
        </div>

        <div class="h-[10rem]"></div>


        <!-- Footer Section =================================  =================================  -->
        <section>
            <div class="w-full flex items-center justify-between bg-[#ffffff0c] px-4 sm:px-5 py-4 rounded-2xl">
                <!-- Name (visible on desktop) -->
                <p class="text-xl hidden md:block font-medium text-white">Ihsan Ahmad Fakhriansyah</p>

                <!-- Social Media Icons -->
                <div class="flex w-full md:w-auto gap-2 justify-center items-center">
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="{{ url('assets/icon/ic-github.png') }}" alt="Github"> Github
                    </a>
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="{{ url('assets/icon/ic-linkedin.png')}}" alt="LinkedIn"> Linkedin
                    </a>
                    <a class="hover:scale-105 transition duration-500 flex justify-center items-center py-2 px-5 gap-x-2 rounded-xl text-md md:text-lg font-medium text-white bg-[#ffffff23]"
                        href="#">
                        <img class="w-5 md:w-8" src="{{ url('assets/icon/ic-gmail.png')}}" alt="Gmail"> Gmail
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
