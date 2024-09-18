@props([
    'name',
    'value' => '',
    'placeholder' => ' ',
    'options' => [],
    'class' => '',
    'id' => '',
    'label' => '',
    'error' => '',
    'selected' => ''
])

<div class="w-full mx-auto mb-5">
    @if($label)
        {{-- <label for="{{ $id }}" class="block mb-2 text-md text-gray-500 dark:text-gray-400 font-Robotomedium">
            {{ $label }}
        </label> --}}
    @endif

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="block py-2.5 px-0 w-full text-base font-normal font-Robotoregular text-gray-500 bg-transparent border-0 border-b-2 border-slate-900 appearance-none dark:text-gray-400 dark:border-slate-900 focus:outline-none focus:ring-0 focus:border-slate-900 peer {{ $class }}"
    >
        <option disabled selected>{{ $placeholder }}</option>
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $optionValue == $selected ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @if ($error)
        <p class="text-red-600 text-sm mt-2 font-playwrite italic">{{ $error }}</p>
    @endif
</div>
