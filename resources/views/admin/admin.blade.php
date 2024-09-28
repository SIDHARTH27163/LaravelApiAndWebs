@extends('admin.layout.layout')
@section('content')
<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 font-Robotomedium underline">
    <div class="p-3 my-1">
        @if (session('success'))
            @include('components.success-alert', [
                'class' => 'font-playwrite font-white',
                'msg' => session('success'),
            ])
        @endif
    </div>

admin home
</div>

@stop
