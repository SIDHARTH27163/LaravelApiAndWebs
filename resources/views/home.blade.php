<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala</title>

    <!-- Fonts -->

    <meta name="description" content="" />
    <meta name="keywords"
        content="  dharamshala ,Dharamshala tourist attractions,lookin dharamshala Things to do in Dharamshala, lookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
    <meta name="author" content="Lookin Dharamshala" />
    <link rel="canonical" href={{ request()->url() }} />
    <meta name="generator" content="All in One SEO (AIOSEO) 4.3.8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name"
        content="lookindharamshala: Lookin Dharamshala , lookindharamshala,Latest Blogs, Blogs , Tourist Destinations , lookindharamshala &amp; Records | What You Want We Have It" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="lookindharamshala.com" />
    <meta property="og:description" content="What You Want We Have It." />
    <meta property="og:url" content={{ request()->url() }} />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="lookindharamshala.com" />
    <meta name="twitter:description" content="What You Want We Have It." />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/css/animation.css')

    @vite('resources/js/animation.js')

    @vite('resources/js/app.js')
    @vite('resources/js/navbar.js')
</head>

<body class="">


    @include('components/navbar')
    <section class="justify-center max-w-7xl  mx-auto  py-8">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0 ">
            <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                <div class="flex flex-col self-stretch px-5 my-auto max-md:mt-10 max-md:max-w-full fadeInLeft scroll-animation section ">
                    <h2
                        class="font-Robotomedium   text-5xl font-extrabold leading-[71px] max-md:max-w-full max-md:text-4xl max-md:leading-[59px]">
                        <span class="text-5xl font-light ">Great</span>
                        <span
                            class="text-5xl font-bold bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]  text-transparent  bg-clip-text">Product</span>
                        <span class="text-5xl font-light">is</span>
                        <br />
                        built by great <span
                            class="text-5xl font-bold bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]  text-transparent  bg-clip-text">teams</span>
                    </h2>
                    <p class="mt-7 text-lg leading-9 text-slate-600 max-md:max-w-full font-playwrite">
                        We help build and manage a team of world-class developers to bring your vision to life
                    </p>
                    <button
                        class="justify-center self-start px-8 py-5 mt-20 text-sm font-semibold leading-4 bg-blue-600 rounded-md shadow-2xl text-neutral-50 max-md:px-5 max-md:mt-10">
                        Let's get started!
                    </button>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow justify-center max-md:max-w-full fadeInRight scroll-animation section">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/6edbac42fa6940652015227c93ee44b409217cc4e6a1b4138bd1d3fc9b1bbb01?apiKey=c81a87a8b87043acac16b0e47d857063&"
                        alt="Illustration of a product team" class="w-full aspect-[1.12] max-md:max-w-full" />
                </div>
            </div>
        </div>
    </section>





    @include('components/multiplecrousel')
    @include('components/testimonial')
    <section class="flex flex-col mt-10 px-3 py-10">
  <div class="flex flex-col w-full bg-slate-0 max-md:max-w-full">
  <header class="flex flex-col  mt-2 text-4xl font-bold text-center text-gray-900 leading-[55px] max-md:mt-10 max-md:max-w-full">
          <div class="shrink-0 self-center bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)] h-[5px] w-[69px]" aria-hidden="true"></div>
          <h2 class="mt-5 max-md:max-w-full">
            <span>Our recent</span>
            <br />
            Case studies
          </h2>
        </header>
        <div class="flex gap-0 items-start self-start"></div>
    <div class="flex z-10 flex-col self-center justify-center mt-0 w-full max-w-7xl max-md:max-w-full">
      <div class="mt-10 max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/871100c6269ded50c3e2145a4e2e280f67bce818dfacd363ace37e5ae907d1ec?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="Case study image" class="grow w-full aspect-[1.45] max-md:max-w-full" />
          </div>
          <article class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow justify-center items-end px-16 py-20 w-full text-sm font-semibold bg-indigo-50 rounded-none border border-solid border-zinc-200 max-md:px-5 max-md:max-w-full">
              <div class="flex flex-col justify-end max-w-full bg-indigo-50 w-[529px]">
                <h3 class="text-3xl leading-10 text-center text-gray-700 max-md:max-w-full">
                  Website Design for SCFC Canada
                </h3>
                <p class="mt-8 leading-6 text-slate-600 max-md:max-w-full">
                  Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario. Its meteoric rise stems out of a solid foundation. The management boasts of over 20 years of rich and varied experience in the shipping and freight forwarding industry.
                </p>
                <a href="#" class="flex gap-1.5 justify-center self-end mt-16 leading-[100%] max-md:mt-10">
                  <span class="bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]">Read more</span>
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ea6c3bb04e973a0e2b0d8584f70941c382f4d4bd1c9ca23d70703abd5b16388b?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="" class="shrink-0 w-4 aspect-square" />
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="mt-9 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4856263a57bb24a910ff1150d65c50c109c838fceff5ee325d99f1daf847782f?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="Case study image" class="grow w-full aspect-[1.45] max-md:max-w-full" />
          </div>
          <article class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow justify-center items-end px-16 py-20 w-full text-sm font-semibold bg-green-50 rounded-none border border-solid border-zinc-200 max-md:px-5 max-md:max-w-full">
              <div class="flex flex-col justify-end max-w-full bg-green-50 w-[529px]">
                <h3 class="text-3xl leading-10 text-center text-gray-700 max-md:max-w-full">
                  Website Design for SCFC Canada
                </h3>
                <p class="mt-8 leading-6 text-slate-600 max-md:max-w-full">
                  Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario. Its meteoric rise stems out of a solid foundation. The management boasts of over 20 years of rich and varied experience in the shipping and freight forwarding industry.
                </p>
                <a href="#" class="flex gap-1.5 justify-center self-end mt-16 leading-[100%] max-md:mt-10">
                  <span class="bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]">Read more</span>
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6c01bd49c2db96b9d7c7abdf0ad1a6c97d92fa170dbd7d26ea38f28201dfb00e?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="" class="shrink-0 w-4 aspect-square" />
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="mt-9 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c8a627b821623e828bcf4fdaa15c84ea86dd93e0adc13d06401b8766cf31acf?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="Case study image" class="grow w-full aspect-[1.45] max-md:max-w-full" />
          </div>
          <article class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow justify-center items-end px-16 py-20 w-full text-sm font-semibold bg-red-50 rounded-none border border-solid border-zinc-200 max-md:px-5 max-md:max-w-full">
              <div class="flex flex-col justify-end max-w-full bg-red-50 w-[529px]">
                <h3 class="text-3xl leading-10 text-center text-gray-700 max-md:max-w-full">
                  Website Design for SCFC Canada
                </h3>
                <p class="mt-8 leading-6 text-slate-600 max-md:max-w-full">
                  Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario. Its meteoric rise stems out of a solid foundation. The management boasts of over 20 years of rich and varied experience in the shipping and freight forwarding industry.
                </p>
                <a href="#" class="flex gap-1.5 justify-center self-end mt-16 leading-[100%] max-md:mt-10">
                  <span class="bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]">Read more</span>
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/86a68469691f9c57c554f905ca71c7152ff8a7a7cf5c2723207de9a0c08b9e34?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="" class="shrink-0 w-4 aspect-square" />
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>
      <a href="#" class="flex gap-3 self-end px-5 mt-10 text-xl font-semibold leading-7 max-md:mt-10">
        <span class="bg-clip-text bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]">Read more case studies</span>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0e4ba3a40d483a16082cd5703b96b5331f73bdd62915d3b19454571a32f167d8?apiKey=c81a87a8b87043acac16b0e47d857063&" alt="" class="shrink-0 aspect-square w-[27px]" />
      </a>
    </div>

  </div>
</section>
<section class="relative">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a47eb282648c5de256e86ce202d2a8e22acee0c9e1e1ffdfff297c2360ee5baf?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain w-full aspect-[3.41]" alt="Decorative image" />
    <div class="absolute py-10 inset-0 flex items-center justify-center text-white lg:text-4xl md:text-4xl text-3xl text-center font-semibold font-Robotomedium leading-10">
        Popular Destinations In Dharamshala
    </div>

</section>
{{-- grid cards --}}
<section class="py-5 max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2  gap-3 py-5">

        @include('components.default-card', [
            'date'=>'September 17, 2021 - Tips & Tricks',
            'title'=>'Have you read The Beach by Alex?',
            'comment'=>'Comments',
            'location'=>'Dharamshala'
         ])
           @include('components.default-card', [
            'date'=>'September 17, 2021 - Tips & Tricks',
            'title'=>'Have you read The Beach by Alex?',
            'comment'=>'Comments',
            'location'=>'Dharamshala'
         ])
           @include('components.default-card', [
            'date'=>'September 17, 2021 - Tips & Tricks',
            'title'=>'Have you read The Beach by Alex?',
            'comment'=>'Comments',
            'location'=>'Dharamshala'
         ])


    </div>
  </section>
{{-- grid cards --}}
@include('components/Footer')
</body>





</html>
