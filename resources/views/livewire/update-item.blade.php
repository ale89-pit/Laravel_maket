<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Item') }}
            </h2>
            <x-secondary-button onclick="javascript:history.back()">Back to customer</x-secondary-button>
        </div>
    </x-slot>
    <div class="container mx-auto  ">


        @livewire('form-item', ['item' => $item])

    </div>
</x-app-layout>
