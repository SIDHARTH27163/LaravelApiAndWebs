@extends('admin.layout.layout')

@section('content')
<div class="p-4 bg-gray-50 h-screen overflow-y-auto rounded-lg font-Robotomedium">
    @include('components.heading', [
        'headingText' => 'Manage Tourist Place',
        'headingClass' => 'text-2xl font-normal font-Robotomedium text-rose-950 whitespace-nowrap leading-relaxed'
    ])

    <div class="max-w-6xl    mx-auto p-2  justify-center py-10 flex lg:flex-row md:flex-row sm:flex-col flex-col  gap-2 ">

        <form
       action="{{ isset($touristPlace) ? route('touristplaces.update', $touristPlace->id) : route('touristplaces.store') }}"
         method="POST" enctype="multipart/form-data"  class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full  p-4  ">
            @csrf
            @if (isset($touristPlace))
            @method('put')
        @else
            @method('post')
        @endif
        <div class="rounded-lg shadow-sm bg-white p-4 my-3">
            <!-- Location -->
            @include('components.selectbox', [
                'id' => "location-id",
                'name' => "location_id",
                'options' => $locations->pluck('name', 'id'),
                'selected' => old('location_id'),
                'placeholder' => 'Select a location',
                'error' => $errors->first('location_id'),
                'label' => 'Location'
            ])

            @include('components.selectbox', [
                'id' => "category",
                'name' => "category",
                'options' => $categories->pluck('name','name'),
                'selected' => old('location_id'),
                'placeholder' => 'Select Category',
                'error' => $errors->first('category'),
                'label' => 'Category'
            ])

             {{-- title  --}}
             @include('components.input', [
                'name' => 'title',
                'type' => 'text',
                'placeholder' => 'Enter Tourist Place Title',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'name-input',
                'label' => 'Enter Tourist Place Title',
                'error' => $errors->first('title'),
                'value' => isset($touristPlace) ? $touristPlace->title : '',
            ])
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
             {{-- title ends --}}
             {{-- about  starts --}}
             @include('components.texteditor', [
                'name' => 'about',
                'placeholder' => 'Enter about',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'about-input',
                'label' => 'Enter about',
                'error' => $errors->first('about'),
                'value' => isset($touristPlace) ? $touristPlace->about : '',
            ])
             {{-- about ends --}}
            <!-- Time To Visit -->
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
    @include('components.texteditor', [
                'name' => 'time_to_visit',
                'type' => 'test',
                'placeholder' => 'Best Time To Visit',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'time_to_visit-input',
                'label' => 'Best Time To Visit (eg jan to feb)',
                'error' => $errors->first('time_to_visit'),
                'value' => isset($touristPlace) ? $time_to_visit : '',
            ])
            <!-- Activity -->
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
            @include('components.texteditor', [
                'name' => 'activity',
                'placeholder' => 'Enter Activities To Do',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'activity-input',
                'label' => 'Enter Activities To Do',
                'error' => $errors->first('activity'),
                'value' => isset($touristPlace) ? $activities->pluck('activity')->implode(', ') : '',
            ])
            <!-- Accommodation -->
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
            @include('components.texteditor', [
                'name' => 'accommodation',
                'placeholder' => 'Enter Accommodations Near',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'accomodations-input',
                'label' => 'Enter Accommodations Near',
                'error' => $errors->first('accommodation'),
                'value' =>  isset($touristPlace)  ? $accommodations->pluck('accommodation')->implode(', ') : '',
            ])
            <!-- Tip -->
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
            @include('components.texteditor', [
                'name' => 'tip',
                'placeholder' => 'Enter Travel Tips',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'tips-input',
                'label' => 'Enter Travel Tips',
                'error' => $errors->first('tip'),
                'value' => isset($touristPlace) ? $tips->pluck('tip')->implode(', ') : '',
            ])
            <!-- Transportation -->
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
            @include('components.texteditor', [
                'name' => 'transportation',
                'placeholder' => 'Enter Transportaion Details',
                'class' => 'border border-slate-950 font-Montserrat',
                'id' => 'transportation-input',
                'label' => 'Enter Transportaion Details',
                'error' => $errors->first('transportation'),
                'value' => isset($touristPlace) ? $transportations->pluck('transportation')->implode(', ') : '',
            ])
</div>
<div class="rounded-lg shadow-sm bg-white p-4 my-3">
    <!-- Places Gallery -->
            @include('components.file', [
                'name' => 'gallery[]',
                'label' => 'Choose Images',
                'error' => $errors->first('gallery'),
                'value' => '',
            ])
            {{-- <div class="my-3 w-full flex flex-col">
                <label for="images" class="text-black font-Montserrat">Add Images:</label>
                <input type="file" name="gallery[]" multiple class=" py-2 bg-gray-100 shadow-md rounded-md">
            </div> --}}
            <!-- Submit Button -->
            @include('components.button', [
                    'name' => 'submit',
                    'type' => 'submit',
                    'label' => 'Submit',
                    'role' => 'submit',
                    'class' =>
                        'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-slate-950 to-gray-800 py-3 px-6 text-center align-middle font-sans text-ls font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none',
                ])
</div>
        </form>
    </div>
    <div class="p-3 my-1">
        @if (session('success'))
            @include('components.success-alert', [
                'class' => 'font-playwrite font-white',
                'msg' => session('success'),
            ])
        @endif
    </div>
    <div class="max-w-5xl mx-auto">
        @if (isset($touristPlaces))
        <div class=" w-full mx-auto">
            <div class="dark:bg-gray-900">
                <div class="mx-auto ">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md rounded-lg overflow-hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div class="w-full md:w-1/2">
                                <form id="search-form" action="{{ route('touristplaces.search') }}" method="GET" class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" name="search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Search" oninput="this.form.submit()">
                                    </div>
                                </form>


                                </form>
                            </div>

                            <div class="w-full md:w-auto flex flex-col gap-3 md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                <!-- Additional Buttons and Dropdowns -->
                                {!!$touristPlaces->links()!!}
                                <!-- Pagination Controls -->
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table id="tourist-places-table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-4 py-3">Title</th>
                                        <th scope="col" class="px-4 py-3">Status</th>
                                        <th scope="col" class="px-4 py-3">Category</th>
                                        <th scope="col" class="px-4 py-3">About</th>

                                        <th scope="col" class="px-4 py-3">
                                            <span>Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tbody>

                                        @foreach ($touristPlaces as $place)
                                            <tr class="border-b dark:border-gray-700 font-Robotomedium">
                                                <td class="px-4 py-3">{{ $place->title }}</td>
                                                <td class="px-4 py-3">
                                                    {{$place->status}}
                                                </td>
                                                <td class="px-4 py-3">{{ $place->category }}</td>
                                                <td class="px-4 py-3">{!! $place->about !!}</td>
                                                <!-- Display location address -->


                                                <td class="py-10 flex items-center">
                                                    <div class="flex items-center p-1">
                                                        <a href="{{ route('touristplaces.edit', $place->id) }}" class="text-yellow-600 hover:underline">
                                                            <!-- Edit Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                                            </svg>
                                                        </a>
                                                        <form action="{{ route('touristplaces.destroy', $place->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:underline">
                                                                <!-- Delete Icon -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- <div class="rounded-lg shadow-sm bg-white p-4 my-3">


                                        {!!$touristPlaces->links()!!}
                                    <!-- Pagination Controls -->

                                </div> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

    </div>
</div>
@endsection
