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
    @include('components/touristplace_top_section')
      {{-- filters --}}
      <section class="py-3 flex lg:flex-row md:flex-row sm:flex-col flex-col px-4 space-x-2">
        @include('components/sidebar')
         <div class="flex-grow lg:max-w-7xl md:ma-w-6xl mx-auto">

            <div class=" flex flex-col items-center justify-center lg:p-6 md:p-5 sm:p-2 p-1">

                @foreach($touristPlace as $place)
                  <div class="py-5">

                  {{-- title --}}
                  <div class="z-10  w-full ">
                    <div class="flex gap-5 max-md:flex-col">
                      <div class="flex flex-col w-1/2  max-md:w-full">
                        <div class="flex flex-col font-Robotomedium w-full text-4xl font-bold tracking-tighter text-justify text-slate-900 max-md:mt-10 ">

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
                             <div class="flex text-black gap-2.5 p-2 items-start self-start mt-4 leading-tight text-base">

                              <time datetime="2021-09-17">{{ $place->created_at->format('F j, Y')}}</time>
                            </div>
                        </div>
                      </div>
                      <div class="flex flex-col  w-1/2  max-md:w-full">
                        <p class="text-lg  tracking-wide leading-8 text-black max-md:mt-10  text-justify font-Robotoregular">
                         {{$place->about}}
                        </p>
                      </div>
                    </div>
                  </div>
                 {{-- title ends --}}
                 {{-- more time --}}
                 <div class="flex flex-col mt-5 w-full text-lg  tracking-wide leading-10 text-black  max-md:mt-10 ">
                    <img loading="lazy" src={{asset($place->location->image)}} alt="" class="object-contain w-full aspect-[2.75] " />
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
                  {{-- new sections --}}
                   <div class="flex flex-col  mt-5 w-full text-lg  tracking-wide leading-10 text-black  max-md:mt-10 ">
                    <header class="flex flex-wrap gap-5 justify-between w-full text-4xl tracking-wide leading-none text-black  ">
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
                      <div class="flex gap-5 max-md:flex-col mt-5">
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
                        <article class="flex flex-col w-6/12  max-md:w-full">
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


                   <div class="mx-auto  grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 mt-10 max-w-5xl">
                    @if($place->gallery->isNotEmpty())
                    @foreach($place->gallery as $image)
                        <img src="{{ asset( $image->gallery) }}" alt="{{ $place->title }}" class="h-64 w-full aspect-[2.75] ">
                    @endforeach
                @else
                    <p>No images available</p>
                @endif
                  </div>
                  {{-- /new sections --}}
                  </div>
                  @endforeach





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
