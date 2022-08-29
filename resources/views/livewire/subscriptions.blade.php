<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if(Auth::user()->address == null)
            <livewire:update-address-form/>
            @else
            <div>
                //subscription view
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
