@vite('resources/css/styles.css')
@vite('resources/js/style.js')
<section class=" px-5 container mx-auto">

    <div id="cCarousel" class="relative mx-auto px-1">
        <div class="flex items-center justify-center ">
            <div class="flex flex-col items-center text-center">
                <div class="bg-gradient-to-br from-[#F76680] to-[#57007B] h-[5px] w-[69px]" aria-hidden="true"></div>
                <h2 class="mt-2 text-4xl font-bold text-gray-900 leading-[55px] max-w-[474px]">
                    Services We Offers
                </h2>
            </div>
        </div>
        <div id="prev" class="arrow bg-white absolute top-1/2 left-0  rounded-full z-10 text-black bg-opacity-70 cursor-pointer">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>

        <div id="next" class="arrow bg-white absolute top-1/2 right-0  rounded-full z-10 text-black bg-opacity-70 cursor-pointer">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>


        <div id="carousel-vp"
            class="relative flex items-center overflow-hidden h-[550px] md:max-w-7xl sm:w-auto  mx-auto px-5 ">
            <div id="cCarousel-inner" class="absolute flex gap-3 transition-all duration-300 ease-in-out left-0   py-3">
                <!-- Start Article Items -->
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg drop-shadow-lg bg-white max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg drop-shadow-lg bg-white max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg drop-shadow-lg bg-white max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg drop-shadow-lg bg-white max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg shadow-md bg-neutral-50 max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg shadow-md bg-neutral-50 max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg shadow-md bg-neutral-50 max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>
                <article class="flex flex-col ml-5  w-96 max-md:ml-0 max-md:w-full cCarousel-item">
                    <div class="flex flex-col grow justify-center  max-md:mt-10">
                        <div class="flex flex-col px-7 py-14 rounded-lg shadow-md bg-neutral-50 max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e9cac6ed32187b11c4ceaea002eeee1c73b3affe40fda4ced9cea36d64091b0?apiKey=c81a87a8b87043acac16b0e47d857063&"
                                class="aspect-square w-[58px]" alt="Web Design & Development Icon" />
                            <h3
                                class="mt-4 text-xl font-semibold leading-7 bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] font-Robotoregular">
                                Web Design & Development</h3>
                            <p class="mt-5 text-md leading-8 text-slate-600 font-playwrite text-justify">
                              A Website is an extension of yourself and we can help you to express it properly. Your website is your
                                number one marketing asset because we live in a digital age.</p>
                        </div>
                    </div>
                </article>

                <!-- Repeat Article for other items -->
                <!-- ... (other articles) ... -->
            </div>
        </div>
    </div>
</section>
