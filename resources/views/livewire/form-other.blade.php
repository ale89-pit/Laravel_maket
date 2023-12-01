<div class="w-full flex  gap-3" action="{{ route('other.store') }}" @submit.prevent>
    <form class="grid grid-cols-3  gap-3">
        <span>
            <x-input-label for="brand" :value="__('Brand')" />
            <x-text-input wire:model="brand" />
        </span>
        <span>
            <x-input-label for="model" :value="__('Model')" />
            <x-text-input wire:model="model" />
        </span>
        <span>
            <x-input-label for="category" :value="__('Category')" />
            <x-text-input wire:model="category" />
        </span>
        <span>
            <x-input-label for="serial_number" :value="__('Serial Number')" />
            <x-text-input wire:model="serial_number" />
        </span>
        <x-primary-button class="max-h-10 mt-5 px-2" type="submit">Save</x-primary-button>
    </form>
</div>
