<div class="container mx-auto">
    {{-- @dump($item['itemable']) --}}
    <form class="w-full max-w-lg flex"  >
    <span class="w-full   p-4 m-4">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input class="max-h-10"  wire:model="name"/>
        <x-input-label for="description" :value="__('Description')" />
        <x-text-input class="max-h-10"   wire:model="description"/>
        <x-input-label for="price" :value="__('Price')" />
        <x-text-input class="max-h-10"  wire:model="price"/>
    </span>
        @if($item['itemable'] instanceof \App\Models\Book)
            
            @livewire('form-book', ['book' => $item['itemable']])
        @elseif($item instanceof \App\Models\Jewelry)
            @livewire('form-jewelry', ['jewelry' => $item['itemable']])
        @else
            @livewire('form-other', ['other' => $item['itemable']])
        
        @endif
    </form>
</div>
