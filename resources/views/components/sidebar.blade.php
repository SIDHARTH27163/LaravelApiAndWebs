<div id="sidebar" class="w-full inset-y-0 left-0 overflow-y-auto bg-white z-30 fixed top-10 lg:max-w-sm md:max-w-sm sm:max-w-full max-w-full p-5 h-auto transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:block">

    <div class="flex w-full items-end justify-end">
        <button id="closeSidebar" class="text-amber-600 lg:hidden hover:scale-110">
            <svg class="w-8 h-8 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
    </div>
    <div class="flex flex-col text-black pt-2 ">
    <article class="flex flex-col px-1 pt-1 pb-10 w-full drop-shadow-lg rounded-lg ">
      <h2 class="self-center text-3xl font-bold leading-loose">About Us</h2>
      <img loading="lazy" src="{{asset('assets/logo.png')}}" alt="Lookin Dharamshala" class="object-contain mt-2 w-full aspect-[2]" />
      <p class="self-start mt-2 -mb-6 px-2 text-base font-playwrite text-justify font-medium leading-7">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum in vel massa donec sit. Mi ut risus sem malesuada ornare. Ac eu erat eget et lorem est arcu. Gravida hendrerit sit blandit semper lacus. Nulla amet suscipit sit lectus tortor. Dolor non eget suspendisse leo scelerisque sed d.
      </p>

    </article>
  </div>
  {{-- recent posts --}}
  <section class="flex flex-col  px-1 py-3 ">
    <div class="px-1">
    <header class=" py-5 text-center text-3xl font-bold leading-none text-amber-600">
      <h2>Recent Post</h2>
    </header>

   @foreach ($posts as $place )
<article class="flex gap-2 drop-shadow-lg  bg-white   my-1 transform transition hover:scale-110 duration-500 ease-in-out hover:rounded-lg">
    <img loading="lazy" src="{{ asset('storage/' . $place->location->image) }}" class="object-contain z-10 shrink-0 aspect-[1.1] w-[94px]" alt="Article preview image" />
    <a href="{{ route('touristplaces.viewplace', ['title' => str_replace(' ', '-', $place->title)]) }}" class="flex flex-col grow shrink-0 self-start mt-0 basis-0 w-fit">
        <header class="self-start text-xs font-medium  text-neutral-950">
            <time datetime="2018-09-17">{{$place->created_at->format('F j, Y')}} - {{$place->location->name}}</time>
        </header>
        <h2 class="mt-1 text-md font-semibold  text-black">
           {{$place->title}}
        </h2>
        <p class=" whitespace-normal tracking-wide font-semibold text-amber-500 text-sm text-justify leading-8 max-md:mt-10 max-md:max-w-full font-Robotoregular">
            {{$place->category}}
        </p>
    </a>
</article>
   @endforeach

    </div>
  </section>

  {{-- recent posts --}}
   {{-- popular posts --}}
   <section class="flex flex-col">
    <header class=" py-5 w-full text-3xl font-bold leading-none text-black bg-white">
      <h2 class="text-center">Popular Post</h2>
    </header>
    <article class="flex flex-col px-1 mt-4 w-full bg-blue-800 bg-opacity-30 ">
      <a href="{{ route('touristplaces.viewplace', ['title' => str_replace(' ', '-', $latestPost->title)]) }}" class="flex relative flex-col items-start px-8 py-10 w-full min-h-[364px]">
        <img loading="lazy" src="{{ asset('storage/' . $latestPost->location->image) }}" class="object-cover absolute inset-0 size-full" alt="Background image for popular post" />
        <p class="relative self-stretch text-2xl font-medium leading-9 text-white">
            {{ $latestPost->created_at->format('F d, Y') }} -  {{ $latestPost->location->name }}
        </p>
        <h3 class="relative mt-20 text-3xl font-bold leading-10 text-white">
            {{ $latestPost->title }}
        </h3>

      </a>
    </article>

  </section>
   {{-- popular posts --}}
   {{-- categories --}}
   <section class="flex flex-col text-2xl font-medium leading-loose text-black ">
    <div class=" bg-white ">
        <h2 class=" text-3xl font-bold text-center leading-loose">Categories</h2>

                <ul class="w-auto divide-y divide-gray-200 dark:divide-gray-700 whitespace-nowrap px-q my-5 font-Robotoregular">



                    @foreach($categories as $category)
                <li class="pt-3 pb-0 sm:pt-4 font-Robotoregular">
                <a href="{{ route('touristplaces.filterPlaceCategory', ['category' => str_replace(' ', '-', $category->name)]) }}" class="flex items-center space-x-4 rtl:space-x-reverse">

                <div class="flex-1 min-w-0">
                <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                    {{ $category->name }}
                </p>

                </div>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    {{ $category->tourist_places_count }}
                </div>
                </a>
                </li>
                  @endforeach

                </ul>


    </div>
  </section>

   {{-- categopries --}}

</div>
