<div class="w-full flex  gap-3">
    <form class="grid grid-cols-3  gap-3">
        <span>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input wire:model="title" />
        </span>
        <span>
            <x-input-label for="author" :value="__('Author')" />
            <x-text-input wire:model="author" />
        </span>
        <span>
            <x-input-label for="pages" :value="__('Pages')" />
            <x-text-input wire:model="pages" />
        </span>
        <span>
            <x-input-label for="isbn" :value="__('Isbn')" />
            <x-text-input wire:model="isbn" />
        </span>
        <span>
            <x-input-label for="year" :value="__('Year')" />
            <x-text-input wire:model="year" />
        </span>
        <x-primary-button class="max-h-10 mt-5 px-2" type="submit">Save</x-primary-button>
    </form>
</div>
