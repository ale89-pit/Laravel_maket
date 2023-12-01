<div>
    <form>
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input  wire:model="title"/>
        <x-input-label for="author" :value="__('Author')" />
        <x-text-input  wire:model="author"/>
        <x-input-label for="pages" :value="__('Pages')" />
        <x-text-input  wire:model="pages"/>
        <x-input-label for="isbn" :value="__('Isbn')" />
        <x-text-input  wire:model="isbn"/>
        <x-input-label for="year" :value="__('Year')" />
        <x-text-input  wire:model="year"/>
    </form>
</div>
