@extends('admin.layout.layout')

@section('content')
<div class="p-4 bg-gray-50 h-screen overflow-y-auto rounded-lg font-Robotomedium">
    @include('components.heading', [
        'headingText' => 'Manage Footer Content',
        'headingClass' => 'text-2xl font-normal font-Robotomedium text-rose-950 whitespace-nowrap leading-relaxed'
    ])

    <div class="max-w-6xl mx-auto p-2 justify-center py-10 flex lg:flex-row md:flex-row sm:flex-col flex-col gap-2">
        <form
            action="{{ route('footer.update', $content->id) }}"
            method="POST" enctype="multipart/form-data" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full p-4">
            @csrf
            @method('post')  <!-- Use POST method for updates -->

            <div class="rounded-lg shadow-sm bg-white p-4 my-3">
                @include('components.selectbox', [
                    'id' => "footer-type",
                    'name' => "type",
                    'options' => [
                        'privacy-policy' => 'Privacy Policy',
                        'terms-and-conditions' => 'Terms and Conditions',
                        'about-us' => 'About Us',
                        'disclaimer' => 'Disclaimer',
                    ],
                    'selected' => $content->type,
                    'placeholder' => 'Select Footer Section',
                    'error' => $errors->first('type'),
                    'label' => 'Footer Section'
                ])
            </div>

            <div class="rounded-lg shadow-sm bg-white p-4 my-3">
                @include('components.texteditor', [
                    'name' => 'content',
                    'placeholder' => 'Enter the content for the selected footer section',
                    'class' => 'border border-slate-950 font-Montserrat font-Robotomedium',
                    'id' => 'content-input',
                    'label' => 'Footer Content',
                    'error' => $errors->first('content'),
                    'value' => $content->content,
                ])
            </div>

            <div class="rounded-lg shadow-sm bg-white p-4 my-3">
                @include('components.button', [
                    'name' => 'submit',
                    'type' => 'submit',
                    'label' => 'Submit',
                    'role' => 'submit',
                    'class' => 'font-Montserrat select-none rounded-lg bg-gradient-to-tr from-slate-950 to-gray-800 py-3 px-6 text-center align-middle font-sans text-ls font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none',
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
</div>
@endsection
