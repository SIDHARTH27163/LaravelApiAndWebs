
@php
    $headingClass = $headingClass ?? 'text-xl font-Robotoregular'; // Default class if none is provided
@endphp

<h1 class="{{ $headingClass }}">{{ $headingText }}</h1>
