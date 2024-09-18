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
    <!-- Scripts -->
    @vite('resources/js/navbar.js')
    @vite('resources/js/app.js')
    @vite('resources/js/sidebar.js')
</head>

<body class="">
    @include('components/touristplaceheader')
    <section class="relative">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a47eb282648c5de256e86ce202d2a8e22acee0c9e1e1ffdfff297c2360ee5baf?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" class="object-contain w-full aspect-[3.41]" alt="Decorative image" />
        <h1 class="absolute  inset-0 flex items-center justify-center text-white lg:text-7xl md:text-5xl text-4xl text-center font-semibold font-Robotomedium whitespace-normal tracking-tight leading-10">
            Popular Destinations In Dharamshala
        </h1>
    </section>
    {{-- welcome note tourist places  --}}
    <section class="flex gap-5  max-w-7xl mx-auto lg:py-10 md:py-10 sm:py-5 py-2 px-5">
       <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col">
              <div class="flex flex-col  max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow text-6xl font-bold text-black   max-md:text-4xl">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e6c9989136af913a8756bd3c75d0056f4bbe9ce78247ad8dbdd0f30266c21654?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain aspect-[90.91] w-[743px] " />
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/74ff7ad99e6b9bf88cf6813c1f099f0800f3fdedb9dece8cedb4a57bbacabc0d?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain mt-2 aspect-[90.91] w-[743px] " />
              <div class="z-10 shrink-0 lg:mt-10 md:mt-10 sm:mt-7 mt-1  ml-1 max-w-full border-amber-500 border-solid border-[7px] h-[7px] w-[268px]  max-md:ml-2.5"></div>
              <h2 class=" mt-4 max-md:mt-0  max-md:text-4xl font-Robotoregular whitespace-normal tracking-normal">
                <span class="text-amber-500">Where do</span> you want to <br /> go?
              </h2>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ba56aca2200ee4089e2cd7b2361287f99ad813ea0b55ce4f80a764c393754411?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain z-10 mt-0 aspect-[90.91] w-[743px] " />
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/753985f4ee13750d0ed0e472bb7a3805ecdc051ad1f2131b53400cc662e358d4?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain mt-6 aspect-[90.91] w-[743px] " />
            </div>
          </div>
          <div class="flex flex-col ml-5 lg:w-[37%] md:w-[37%] sm:w-full w-full max-md:ml-0 ">
            <p class="text-lg font-playwrite text-justify font-normal tracking-wide leading-8 text-black  lg:mt-10 md:mt-10 sm:mt-6 mt-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mor mattis nec etiam ac. Bibendum tellus mi imperdiet amet maecenas magna tortor nulla. Nec tortor ut cursus ornare nibh vivamus. Quam elementum at velit viverra mattis.
            </p>
          </div>
       </div>
      </section>
      {{-- filters --}}
      <section class="py-3 flex lg:flex-row md:flex-row sm:flex-col flex-col px-4 space-x-2">
        @include('components/sidebar')
        <div class="flex-grow max-w-6xl">

            <div class=" flex flex-col items-center justify-center lg:p-6 md:p-5 sm:p-2 p-1">

                  {{-- top cards --}}
                  <section class="py-5">

                    @foreach($touristPlace as $place)
                    <section class="flex flex-col">
                        <div class="z-10  w-full ">
                          <div class="flex gap-5 max-md:flex-col">
                            <div class="flex flex-col w-1/2 max-md:ml-0 max-md:w-full">
                              <div class="flex flex-col font-Robotomedium w-full text-4xl font-bold tracking-tighter text-justify text-amber-500 max-md:mt-10 ">

                                <h2 class=" p-2 mt-1 underline ">
                                 {{$place->title}}

                                </h2>
                                <h2 class=" p-2 mt-1 underline ">
                                    {{$place->category}}

                                   </h2>
                                   <h2 class=" p-2 mt-1 underline ">
                                    {{$place->category}}
                                    {{ $place->location->name}}
                                   </h2>
                                   <div class="flex text-amber-600 gap-2.5 p-2 items-start self-start mt-4 leading-tight text-base">

                                    <time datetime="2021-09-17">{{ $place->created_at->format('F j, Y')}}</time>
                                  </div>
                              </div>
                            </div>
                            <div class="flex flex-col ml-5 w-1/2 max-md:ml-0 max-md:w-full">
                              <p class="text-lg  tracking-wide leading-8 text-black max-md:mt-10  text-justify font-Robotoregular">
                               {{$place->about}}
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="flex flex-col pl-10 mt-5 w-full text-lg  tracking-wide leading-10 text-black max-md:pl-5 max-md:mt-10 ">
                          <img loading="lazy" src={{asset('storage/' .$place->location->image)}} alt="" class="object-contain w-full aspect-[2.75] " />
                         <!-- Display Tips -->
                        @if($place->tips->isNotEmpty())
                        @foreach($place->tips as $tip)
                            <p class="mt-14 max-md:mt-10  font-Robotoregular text-justify">
                                {{ $tip->tip }}
                            </p>
                        @endforeach
                        @else
                        <p>No tips available.</p>
                        @endif

                        <!-- Display Time to Visit -->
                        @if($place->timeToVisits->isNotEmpty())
                        @foreach($place->timeToVisits as $timeToVisit)
                            <p class="mt-4  font-Robotoregular text-justify">
                                {{ $timeToVisit->time_to_visit }}
                            </p>
                        @endforeach
                        @else
                        <p>No time to visit information available.</p>
                        @endif

                        </div>
                        <section class="flex flex-col p-10">
                            <header class="flex flex-wrap gap-5 justify-between w-full text-4xl tracking-wide leading-none text-black max-w-[1147px] ">
                              <h1>About {{$place->title}} </h1>

                            </header>
                            <div class="flex flex-wrap gap-10 mt-2 text-lg  tracking-wide leading-10 text-black">
                              @if($place->accommodations->isNotEmpty())
                              @foreach($place->accommodations as $accommodation)
                                  <p class="mt-4  font-Robotoregular text-justify">
                                      {{ $accommodation->accommodation }}
                                  </p>
                              @endforeach
                              @else
                              <p>No  information available.</p>
                              @endif
                            </div>
                            <div class="mt-11 max-md:mt-10 ">
                              <div class="flex gap-5 max-md:flex-col">
                                <article class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                                    @if($place->activities->isNotEmpty())
                                    @foreach($place->activities as $activity)
                                  <p class="text-lg text-justify tracking-wide leading-8 font-Robotoregular text-black max-md:mt-10 ">
                                    {{ $activity->activity }}
                                  </p>
                                  @endforeach
                                  @else
                                  <p>No  information available.</p>
                                  @endif
                                </article>
                                <article class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                                    @if($place->transportations->isNotEmpty())
                                    @foreach($place->transportations as $transportation)
                                  <p class="text-lg text-justify tracking-wide leading-8 font-Robotoregular text-black max-md:mt-10 ">
                                    {{ $transportation->transportation }}
                                  </p>
                                  @endforeach
                                  @else
                                  <p>No  information available.</p>
                                  @endif
                                </article>
                              </div>
                            </div>

                            <footer class="flex flex-wrap gap-10 mt-12 text-lg font-bold tracking-wide leading-10 text-black max-md:mt-10">

                            </footer>
                          </section>
                          <section>
                          <div class="mx-auto p-2 grid grid-cols-3 gap-4">
                            @if($place->gallery->isNotEmpty())
                            @foreach($place->gallery as $image)
                                <img src="{{ asset('storage/' . $image->gallery) }}" alt="{{ $place->title }}" class="h-64 w-full aspect-[2.75] ">
                            @endforeach
                        @else
                            <p>No images available</p>
                        @endif
                          </div>
                          </section>
                      </section>

                    <!-- Display the gallery images -->

                @endforeach

                  </section>






            </div>
        </div>
    </section>
{{--  --}}
{{-- footer --}}
@include('components/touristfooter')
{{-- footer --}}

{{--  --}}
</body>





</html>
