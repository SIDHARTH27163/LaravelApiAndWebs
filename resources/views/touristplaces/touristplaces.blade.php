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
            <div class="flex flex-col grow text-6xl font-bold text-black  max-md:max-w-full max-md:text-4xl">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e6c9989136af913a8756bd3c75d0056f4bbe9ce78247ad8dbdd0f30266c21654?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain aspect-[90.91] w-[743px] max-md:max-w-full" />
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/74ff7ad99e6b9bf88cf6813c1f099f0800f3fdedb9dece8cedb4a57bbacabc0d?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain mt-2 aspect-[90.91] w-[743px] max-md:max-w-full" />
              <div class="z-10 shrink-0 lg:mt-10 md:mt-10 sm:mt-7 mt-1  ml-1 max-w-full border-amber-500 border-solid border-[7px] h-[7px] w-[268px]  max-md:ml-2.5"></div>
              <h2 class=" mt-4 max-md:mt-0 max-md:max-w-full max-md:text-4xl font-Robotoregular whitespace-normal tracking-normal">
                <span class="text-amber-500">Where do</span> you want to <br /> go?
              </h2>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ba56aca2200ee4089e2cd7b2361287f99ad813ea0b55ce4f80a764c393754411?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain z-10 mt-0 aspect-[90.91] w-[743px] max-md:max-w-full" />
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/753985f4ee13750d0ed0e472bb7a3805ecdc051ad1f2131b53400cc662e358d4?placeholderIfAbsent=true&apiKey=c81a87a8b87043acac16b0e47d857063" alt="" class="object-contain mt-6 aspect-[90.91] w-[743px] max-md:max-w-full" />
            </div>
          </div>
          <div class="flex flex-col ml-5 lg:w-[37%] md:w-[37%] sm:w-full w-full max-md:ml-0 ">
            <p class="text-lg font-playwrite text-justify font-normal tracking-wide leading-8 text-black max-md:max-w-full lg:mt-10 md:mt-10 sm:mt-6 mt-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mor mattis nec etiam ac. Bibendum tellus mi imperdiet amet maecenas magna tortor nulla. Nec tortor ut cursus ornare nibh vivamus. Quam elementum at velit viverra mattis.
            </p>
          </div>
       </div>
      </section>
      {{-- filters --}}
      <section class="py-3 flex lg:flex-row md:flex-row sm:flex-col flex-col px-4 space-x-2">
        @include('components/sidebar' , [
            'data'=>$posts
        ])

        <div class="flex-grow max-w-6xl">

            <div class=" flex flex-col items-center justify-center lg:p-6 md:p-5 sm:p-2 p-1">
                <div class="flex flex-col font-medium text-black max-w-5xl">

                    @if($firstItem->isNotEmpty())
                    @include('components.default-card', [

                        'image'=>asset('storage/' .$firstItem->first()->location->image),
                        'date' => $firstItem->first()->created_at->format('F j, Y'),
                        'title' => $firstItem->first()->title,
                        'comment' => 'Comments',
                        'location' => $firstItem->first()->location->name ?? 'Unknown Location',
                        'description' => Str::limit($firstItem->first()->about, 300),

                        'link' => route('touristplaces.viewplace',  ['title' => str_replace(' ', '-', $firstItem->first()->title)]),
                    ])
                @endif

                  </div>
                  {{-- top cards --}}
                  <section class="py-5">
                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2  gap-3 py-5">

                        @foreach($firstSet as $place)
                        @include('components.default-card', [
                        'image' => asset('storage/' . $place->location->image),
                        'date' => $place->created_at->format('F j, Y'),
                        'title' => $place->title,
                        'comment' => 'Comments',
                        'location' => $place->location->name ?? 'Unknown Location',
                        'description' => Str::limit($place->about, 95),
                        'link' => route('touristplaces.viewplace',  ['title' => str_replace(' ', '-', $place->title)]), // Correctly generate the URL
                    ])

                    @endforeach


                    </div>
                  </section>
                   {{-- cards --}}
                  <div class="flex flex-col font-medium text-black max-w-5xl">
                    @if($staticItem->isNotEmpty())
                    @include('components.default-card', [
                         'image'=>asset('storage/' .$place->location->image),
                        'date' => $firstItem->first()->created_at->format('F j, Y'),
                        'title' => $firstItem->first()->title,
                        'comment' => 'Comments',
                        'location' => $firstItem->first()->location->name ?? 'Unknown Location',
                        'description' => Str::limit($firstItem->first()->about, 300),

                       'link' => route('touristplaces.viewplace',  ['title' => str_replace(' ', '-', $firstItem->first()->title)]),


                    ])
                @endif

                  </div>

 {{-- bottom cards --}}
 <section class="py-5">
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2  gap-3 py-5">
        @foreach($secondSet as $place)
        @include('components.default-card', [
                           'image'=>asset('storage/' .$place->location->image),
                            'date' => $place->created_at->format('F j, Y'),
                            'title' => $place->title,
                            'comment' => 'Comments',
                            'location' => $place->location->name ?? 'Unknown Location',
                            'description' => Str::limit($place->about, 95),
                            'link' => route('touristplaces.viewplace',  ['title' => str_replace(' ', '-', $place->title)]),

        ])
        @endforeach




    </div>
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



<

</html>
