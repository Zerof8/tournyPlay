<x-jet-form-section submit="save">
    <x-slot name="title">
        {{ __('Address') }}
    </x-slot>

    <x-slot name="description">
        @if(Auth::user()->address == null)
            <div class="text-red-500">
                {{ __('In order to subscribe or buy credits please enter your billing address') }}
            </div>
        @else
            {{ __('Update your billing address here') }}
        @endif
    </x-slot>

    <x-slot name="form">
        <!-- Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}"/>
            <x-jet-input type="text" class="w-full" id="address" name="address" wire:model.defer="address"/>
            <x-jet-input-error for="address" class="mt-2"/>
        </div>
        <!-- City -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="city" value="{{ __('City') }}"/>
            <x-jet-input type="text" class="w-full" id="city" name="city" wire:model.defer="city"/>
            <x-jet-input-error for="city" class="mt-2"/>
        </div>
        <!-- State -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state" value="{{ __('State') }}"/>
            <x-jet-input type="text" class="w-full" id="state" name="zip" wire:model.defer="state"/>
            <x-jet-input-error for="state" class="mt-2"/>
        </div>
        <!-- Zip -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="zip" value="{{ __('Zip') }}"/>
            <x-jet-input type="text" class="w-full" id="zip" name="zip" wire:model.defer="zip"/>
            <x-jet-input-error for="zip" class="mt-2"/>
        </div>
        <!-- Country -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="country" value="{{ __('Country') }}"/>
            <x-jet-input type="text" class="w-full" id="country" name="country" wire:model.defer="country"/>
            <x-jet-input-error for="country" class="mt-2"/>
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="save">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
