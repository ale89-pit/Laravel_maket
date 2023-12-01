
<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Item') }}
        </h2>
    </x-slot>
<div>
    @livewire('form-item', ['item' => $item])
    
</div>
</x-app-layout>
