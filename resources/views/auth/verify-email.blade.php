<x-guest-layout>
    <div class="mb-4">
        <!-- Display the email from the session -->
        <p>{{ __('A verification code has been sent to:') }} <strong>{{ $email }}</strong></p>
    </div>

    <form method="POST" action="{{ route('verify.otp') }}">
        @csrf

        <div>
            <x-input-label for="otp" :value="__('Enter OTP')" />

            {{-- <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autofocus  /> --}}

            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autofocus />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Verify Email') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
