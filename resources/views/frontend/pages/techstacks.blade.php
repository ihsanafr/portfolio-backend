<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/techstacks.css">
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
        <section>
            <div
                class="drop-in shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center justify-center h-12 w-32  group p-2">
                <svg class="w-5 h-5 mb-1 text-[#804CDF]  transform " xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 176 176" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M172.656 31.5684L162.906 29.2684L136.556 55.4684L121.631 40.2684L147.331 13.3059L145.081 3.40587C139.651 1.58503 133.97 0.623446 128.244 0.55587C121.996 0.445332 115.793 1.63731 110.031 4.05587C104.46 6.56948 99.4264 10.1347 95.2062 14.5559C90.493 19.0023 86.7667 24.3896 84.2687 30.3684C79.4396 42.2549 79.4396 55.5568 84.2687 67.4434C58.2089 93.0804 32.4858 119.058 7.10625 145.368C4.48125 148.806 3.23125 153.093 3.55625 157.406C3.68107 159.703 4.25758 161.953 5.2528 164.027C6.24803 166.101 7.64244 167.959 9.35625 169.493C10.9229 171.202 12.7437 172.568 14.8187 173.593C16.9437 174.531 19.2313 175.068 21.5438 175.181C25.4938 175.106 29.2813 173.606 32.2188 170.968C51.5688 152.756 88.6438 115.343 109.706 93.4184C115.419 95.8434 121.556 97.0934 127.756 97.0809C133.997 97.0731 140.173 95.816 145.92 93.3837C151.667 90.9513 156.869 87.393 161.219 82.9184C170.133 73.7979 175.119 61.547 175.106 48.7934C175.253 42.9554 174.425 37.1338 172.656 31.5684ZM24.6563 162.106C24.1782 162.538 23.5971 162.839 22.9688 162.981C22.3534 163.098 21.7216 163.098 21.1063 162.981C20.4606 162.881 19.8455 162.637 19.3063 162.268C18.7296 161.929 18.2414 161.458 17.8813 160.893C16.1313 159.106 14.4938 155.706 16.1313 153.793C33.2563 135.581 68.5188 99.9809 90.5688 78.2184C91.8188 79.8767 93.1854 81.4434 94.6688 82.9184C96.1438 84.46 97.7271 85.8809 99.4187 87.1809C78.0937 109.056 43.3063 144.231 24.6563 162.106ZM163.631 48.7934C163.656 58.3559 159.931 67.5434 153.231 74.3934C146.547 80.955 137.554 84.6312 128.188 84.6312C118.821 84.6312 109.828 80.955 103.144 74.3934C98.2409 69.2812 94.8918 62.881 93.4865 55.9386C92.0812 48.9962 92.6776 41.7974 95.2062 35.1809C96.8888 30.6783 99.4969 26.5787 102.862 23.1466C106.227 19.7146 110.275 17.0265 114.744 15.2559C118.991 13.4925 123.545 12.5835 128.144 12.5809H131.319L108.606 35.9934V44.6934L132.294 68.2684H140.544L163.631 45.5684V48.7934ZM28.4938 71.6059H47.6312L56.4437 80.5684L64.9187 72.1434L56.6062 63.6684V63.1309L57.3187 42.5184L54.5688 37.0559L18.8188 13.5309L11.4313 14.3559L1.04375 24.9684L0.21875 32.4559L23.1938 68.9309L28.4938 71.6059ZM16.6813 26.2059L45.6063 45.2559L45.1188 59.2934H31.6688L13.0188 29.7684L16.6813 26.2059ZM105.494 113.206L113.919 104.793L152.744 144.606C156.011 148.044 157.833 152.606 157.833 157.35C157.833 162.093 156.011 166.655 152.744 170.093C150.289 172.624 147.126 174.354 143.671 175.056C140.216 175.759 136.63 175.401 133.381 174.031C131.305 173.114 129.445 171.773 127.919 170.093L88.6437 130.056L97.1312 121.581L136.281 161.506C136.807 162.087 137.462 162.537 138.194 162.818C139.633 163.399 141.242 163.399 142.681 162.818C143.413 162.537 144.068 162.087 144.594 161.506C145.152 160.973 145.58 160.319 145.844 159.593C146.137 158.862 146.29 158.082 146.294 157.293C146.269 156.509 146.122 155.732 145.856 154.993C145.593 154.268 145.165 153.613 144.606 153.081L105.494 113.206Z"
                        fill="#804CDF" />
                </svg>
                <div class="w-2"></div>
                <p class="text-[#804CDF] font-medium text-md">Techstack</p>
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
            <div class="h-[3rem]"></div>
            <div class="drop-out grid drop-up md:grid-cols-2 gap-y-6 grid-cols-1 lg:grid-cols-3 gap-0 md:gap-x-5 ">
                @foreach ($techstacks as $techstack)
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
        </section>

        <div class="h-[20rem]"></div>


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