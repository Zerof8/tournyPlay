<x-jet-form-section submit="save">
    <x-slot name="title">
        {{ __('Address') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Enter your billing address in order to buy credits or subscribe!') }}
    </x-slot>

    <x-slot name="form">
        <!-- Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <x-jet-input type="text" class="w-full" id="address" wire:model.defer="state.address" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>
        <!-- City -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="city" value="{{ __('City') }}" />
            <x-jet-input type="text" class="w-full" id="city" wire:model.defer="state.city" />
            <x-jet-input-error for="city" class="mt-2" />
        </div>
        <!-- State -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state" value="{{ __('State') }}" />
            <x-jet-input type="text" class="w-full" id="state" wire:model.defer="state.state" />
            <x-jet-input-error for="state" class="mt-2" />
        </div>
        <!-- Zip -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="zip" value="{{ __('Zip') }}" />
            <x-jet-input type="text" class="w-full" id="zip" wire:model.defer="state.zip" />
            <x-jet-input-error for="zip" class="mt-2" />
        </div>
        <!-- Country -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="country" value="{{ __('Country') }}" />
            <x-jet-input type="text" class="w-full" id="country" wire:model.defer="state.country" />
            <x-jet-input-error for="country" class="mt-2" />
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
