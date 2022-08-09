<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-jet-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <label>Gender</label>
                <select name="gender"
                        class="ml-3 px-2 w-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="gender">
                    <option value="" selected hidden></option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                </select>
            </div>

            <div class="mt-2">
                <x-jet-label for="first_name" value="{{ __('First name') }}"/>
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                             :value="old('first_name')" required
                             autofocus autocomplete="name"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="last_name" value="{{ __('Last name') }}"/>
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                             :value="old('last_name')" required
                             autofocus/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                             required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                             autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <label class=" font-medium text-sm text-gray-700"> {{ __('Phone number') }}</label>
                <x-tooltip>Start your phone number with "+" before you enter your country code</x-tooltip>
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"
                             :value="old('phone_number')"
                             autofocus/>
            </div>

            <div class="mt-4" x-data='date_of_birth.max = new Date().toISOString().split("T")[0];'>
                <x-jet-label for="date_of_birth" value="{{ __('Date of birth') }}"/>
                <x-date-picker id="date_of_birth" class="block mt-1 w-full" name="date_of_birth" :value="old('date_of_birth')"
                             required/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I am over 18 years old and I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
