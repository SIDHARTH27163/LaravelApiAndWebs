<!-- resources/views/components/input.blade.php -->
@props(['name', 'value' => '', 'placeholder' => ' ', 'class' => '', 'id' => '', 'label' => '', 'error' => ''])

<div class="z-0 w-full mb-5 group">
    <label for="first_name" class="block mb-2 text-md text-gray-500 dark:text-gray-400 font-Robotomedium">{{$label}}</label>
    <div id="quill-editor-{{ $id }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></div>

    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        class="hidden {{ $class }} block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
    >{{ $value }}</textarea>

    @if ($error)
        <p class="text-red-600 text-sm mt-2 font-playwrite italic">{{ $error }}</p>
    @endif
</div>


