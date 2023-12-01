<div class="w-full flex gap-3">
    <form class="grid grid-cols-3  gap-3" action="{{ route('jewelry.store') }}" @submit.prevent>
        @csrf
        @method('POST')
        <span>
            <x-input-label for="material" :value="__('Material')" />
            <x-text-input wire:model="material" />
        </span>
        <span>
            <x-input-label for="weight" :value="__('Weight')" />
            <x-text-input type="number" wire:model="weight" />
        </span>
        <span>
            <x-input-label for="color" :value="__('Color')" />
            <x-text-input wire:model="color" />
        </span>
        <span>
            <x-input-label for="carat" :value="__('Carat')" />
            <x-text-input wire:model="carat" />
        </span>
        <span>
            <x-input-label for="type" :value="__('Type')" />
            <x-text-input wire:model="type" />
        </span>
        <x-primary-button class="max-h-10 mt-5 px-2" type="submit">Save</x-primary-button>
    </form>
</div>
