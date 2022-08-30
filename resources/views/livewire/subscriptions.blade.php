<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
{{--            @if(Auth::user()->address == null)--}}
{{--            <livewire:update-address-form/>--}}
{{--            @else--}}
            <div class="w-full">
{{--                <x-subscription_comp/>--}}
                <button class="ml-1 py-2 px-4 shadow-md no-underline rounded-full bg-red text-white font-sans font-semibold text-sm border-red btn-primary hover:text-white hover:bg-red-light focus:outline-none active:shadow-none">Danger</button>
                <button class="ml-1 py-2 px-4 shadow-md no-underline rounded-full bg-red text-white font-sans font-semibold text-sm border-red btn-primary hover:text-white hover:bg-red-light focus:outline-none active:shadow-none">Danger</button>
                //subscription view
            </div>
{{--            @endif--}}
        </div>
    </div>
</x-app-layout>
