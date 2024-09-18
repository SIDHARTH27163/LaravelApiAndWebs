@extends('admin.layout.layout')

@section('content')
    @include('components.confirm-modal', [
        'id' => 'confirmModal',
        'message' => 'Are you sure you want to delete this item?',
    ])

    <div class="p-4 bg-gray-100 h-screen overflow-y-auto rounded-lg font-Robotomedium">
        @include('components.heading', [
            'headingText' => 'Add Gallery',
            'headingClass' =>
                'text-2xl font-normal font-Robotomedium text-rose-950 whitespace-nowrap leading-relaxed',
        ])

        <div class="container w-full   mx-auto flex justify-center py-4">
            <form
                action="{{ isset($casestudy) ? route('managecasestudies.update', $casestudy->id) : route('managecasestudies.store') }}"
                method="post" enctype="multipart/form-data"
                class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4 rounded-lg shadow-lg">
                @csrf
                @if (isset($casestudy))
                    @method('put')
                @else
                    @method('post')
                @endif

                @include('components.input', [
                    'name' => 'title',
                    'type' => 'text',
                    'placeholder' => 'Enter the title',
                    'class' => 'border border-slate-950 font-Montserrat',
                    'id' => 'title-input',
                    'label' => 'Enter title',
                    'error' => $errors->first('title'),
                    'value' => isset($casestudy) ? $casestudy->title : '',
                ])

                @include('components.texteditor', [
                    'name' => 'description',
                    'placeholder' => 'Enter description',
                    'class' => 'border border-slate-950 font-Montserrat',
                    'id' => 'description-input',
                    'label' => 'Enter Description',
                    'error' => $errors->first('description'),
                    'value' => isset($casestudy) ? $casestudy->description : '',
                ])

                @include('components.file', [
                    'name' => 'image',
                    'label' => 'Choose Image',
                    'error' => $errors->first('image'),
                    'value' => '',
                ])

                @include('components.button', [
                    'name' => 'submit',
                    'type' => 'submit',
                    'label' => 'Submit',
                    'role' => 'submit',
                    'class' =>
                        'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-slate-950 to-gray-800 py-3 px-6 text-center align-middle font-sans text-ls font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none',
                ])
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

        @if (isset($casestudies))
            <div class="container w-full mx-auto px-4">
                <div class="dark:bg-gray-900 p-5 sm:p-5">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div
                                class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                    <form class="flex items-center">
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Search" required>
                                        </div>
                                    </form>
                                </div>

                                <!-- Other elements like actions and filter can be added here -->
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Image</th>
                                            <th scope="col" class="px-4 py-3">Title</th>
                                            <th scope="col" class="px-4 py-3">Description</th>

                                            <th scope="col" class="px-4 py-3">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($casestudies as $index => $casestudy)
                                            <tr
                                                class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="px-4 py-3">
                                                    <img src="{{ asset('storage/' . $casestudy->image) }}" alt="Image"
                                                        width="100">
                                                </td>
                                                <td class="px-4 py-3">{{ $casestudy->title }}</td>
                                                <td class="px-4 py-3">{{ $casestudy->description }}</td>

                                                <td class="px-4 py-9 flex flex-row gap-2">
                                                    <a href="{{ route('managecasestudies.edit', $casestudy->id) }}"
                                                        class="text-blue-600 hover:underline"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('managecasestudies.gallery', $casestudy->id) }}"
                                                        class="text-green-600 hover:underline"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                        </svg>

                                                    </a>
                                                    <form action="{{ route('managecasestudies.destroy', $casestudy->id) }}"
                                                        method="post"
                                                        onsubmit="return confirm('Are you sure you want to delete this case study?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:underline"><svg
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination or other actions can be added here -->
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
