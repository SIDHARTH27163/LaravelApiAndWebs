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
      <section class="py-3 flex lg:flex-row md:flex-row sm:flex-col flex-col px-4 space-x-2 ">
        @include('components/sidebar' , [
            'data'=>$posts
        ])

        <div class="flex-grow lg:max-w-7xl md:ma-w-6xl mx-auto">

            <div class=" flex flex-col items-center justify-center lg:p-6 md:p-5 sm:p-2 p-1">
                <div class="flex flex-col font-medium text-black max-w-5xl">

                    @if($firstItem->isNotEmpty())
                    @include('components.default-card', [

                        'image'=>asset($firstItem->first()->location->image),
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
                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1  gap-3 py-5">

                        @foreach($firstSet as $place)
                        @include('components.default-card', [
                        'image' => asset( $place->location->image),
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
                         'image'=>asset($place->location->image),
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
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1  gap-3 py-5">
        @foreach($secondSet as $place)
        @include('components.default-card', [
                           'image'=>asset($place->location->image),
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





</html>
