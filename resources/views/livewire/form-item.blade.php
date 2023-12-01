<div class="container mx-auto my-3">

    @csrf
    @method('post')
    @if (request()->routeIs('customer.edit'))
        <div x-data="{ selectedType: '' }" class="m-2 p-2">
            <select x-model="selectedType" class="my-3">
                <option value="" disabled>Select type of item</option>
                <option active value="form-jewelry">Jewelry</option>
                <option value="form-book">Book</option>
                <option value="form-other">Other</option>
            </select>

            <template x-if="selectedType === 'form-jewelry'">
                <div>

                    <!-- Includi il tuo form per il gioiello -->
                    @livewire('form-jewelry')

                </div>
            </template>
            <template x-if="selectedType === 'form-book'">
                <div>

                    <!-- Includi il tuo form per il libro -->
                    @livewire('form-book')
                </div>
            </template>


            <template x-if="selectedType === 'form-other'">
                <div>


                    <!-- Includi il tuo form per altri elementi -->
                    @livewire('form-other')
                </div>
            </template>
        </div>
    @endif

    {{-- @dump($item['itemable']) --}}

    @if ($item)
        {{-- @dump("ciao") --}}
        @if ($item['itemable'] instanceof \App\Models\Book)
            @livewire('form-book', ['book' => $item['itemable']])
        @elseif($item['itemable'] instanceof \App\Models\Jewelry)
            @livewire('form-jewelry', ['jewelry' => $item['itemable']])
        @else
            @livewire('form-other', ['other' => $item['itemable']])
        @endif
    @endif


    <form class="w-full p-4 gap-3" method="post" action="{{ route('customer.create-item') }} " @submit.prevent>
        <span class="flex gap-3 p-3 w-full">
            <span>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input class="max-h-10" wire:model="name" />
            </span>
            <span>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input class="max-h-10" wire:model="description" />
            </span>
            <span>
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input class="max-h-10" wire:model="price" />
            </span>
        </span>

        @if (request()->routeIs('customer.edit'))
            <x-primary-button type="submit" class="p-2 mt-5 bg-blue-500 text-dark">Metti in
                vendita!!</x-primary-button>
        @else
            <x-primary-button type="submit" class="p-2 mt-5 bg-blue-500 text-dark">Modifica</x-primary-button>
        @endif
    </form>

</div>
