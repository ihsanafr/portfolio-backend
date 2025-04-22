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
        @include('frontend.layouts.bottomnav')
        <div class="h-[6rem]"></div>


        <section class="max-w-screen-lg h-[30rem] grid md:grid-cols-2 gap-8">
            <div class="w-full hidden md:block bg-[url('assets/about-image/me.png')] bg-center bg-cover rounded-2xl shadow-[#804CDF] border-2 border-[#804CDF]"></div>
            <div class="w-full  bg-[url('assets/about-image/me-2.png')] bg-top bg-cover rounded-2xl shadow-[#804CDF] border-2 border-[#804CDF]"></div>
        </section>

        <div class="h-[3rem]"></div>

        <div>
            <p class="text-white text-2xl md:text-4xl font-semibold">Hi👋, I'm Ihsan Ahmad Fakhriansyah</p>
            <p class="text-white text-xl md:text-3xl font-medium">Fullstack Developer Enthusiast</p>
        </div>
        <div class="h-[3rem]"></div>


        <div
            class="flex w-full  shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl items-center px-[1rem] py-[1rem]">
            <div class="flex flex-col">
                <p class="text-white font-semibold text-xl">About Me</p>
                <div class="h-[1rem]"></div>
                <p class="text-white font-regular text-md">Hi everyone! My name is Ihsan Ahmad Fakhriansyah, usually
                    called Ihsan, born in Jakarta on April 24 2008. I live in Bekasi and am currently in class 10 at SMK
                    Software Engineering Department at SMK IDN Boarding School Jonggol. I am interested in computer
                    programming, especially website development, as well as other IT fields such as multimedia, graphic
                    design, UI/UX design, and photo and video editing.</p>

            </div>
        </div>
        <div class="h-[3rem]"></div>

        <div class="flex flex-col md:flex-row max-w-screen-lg gap-8">
            <div
                class="flex w-full  shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl px-[1rem] py-[1rem]">
                <div class="flex flex-col">
                    <p class="text-white font-semibold text-xl">My Passion</p>
                    <div class="h-[1rem]"></div>
                    <div class="flex w-full h-full grid-cols-2 grid justify-between gap-4">
                        <div class="Mobile Developer text-white">
                            <p class="text-lg font-medium">Web Developer</p>
                            <p class="text-sm font-light">I’m passionate about mobile app development and specialize in
                                creating user-friendly, seamless, and functional applications.</p>
                        </div>
                        <div class="Mobile Developer text-white">
                            <p class="text-lg font-medium">Mobile Developer</p>
                            <p class="text-sm font-light">I’m passionate about mobile app development and specialize in
                                creating user-friendly, seamless, and functional applications.</p>
                        </div>
                        <div class="Mobile Developer text-white">
                            <p class="text-lg font-medium">Visual Designer</p>
                            <p class="text-sm font-light">I’m passionate about mobile app development and specialize in
                                creating user-friendly, seamless, and functional applications.</p>
                        </div>
                        <div class="Mobile Developer text-white">
                            <p class="text-lg font-medium">Content Writer</p>
                            <p class="text-sm font-light">I’m passionate about mobile app development and specialize in
                                creating user-friendly, seamless, and functional applications.</p>
                        </div>
                    </div>


                </div>
            </div>
            <div
                class="flex md:w-[30rem]  shadow-[#804CDF] border border-[#804CDF] bg-[#804cdf17] flex rounded-xl px-[1rem] py-[1rem]">
                <div class="flex flex-col">
                    <p class="text-white font-semibold text-xl">Language</p>
                    <div class="h-[2rem]"></div>
                    <div class="h-full flex flex-col ">
                        <div class=" flex items-center text-white">
                            <img src="assets/icon/indonesia.png" class="w-[3rem] h-[3rem]" alt="">
                            <div class="w-[1rem]"></div>
                            <div>
                                <p class="font-semibold">Indonesia</p>
                                <p class="text-xs">Indonesian is my native language that I use every day</p>
                            </div>
                        </div>
                    <div class="h-[1rem]"></div>

                        <div class=" flex items-center text-white">
                            <img src="assets/icon/english.png" class="w-[3rem] h-[3rem]" alt="">
                            <div class="w-[2rem]"></div>
                            <div>
                                <p class="font-semibold">English</p>
                                <p class="text-xs">I have a lot of experience in using English such as communication, speeches, presentations, etc</p>
                            </div>
                        </div>
                    </div>
                    

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