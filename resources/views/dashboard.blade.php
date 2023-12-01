
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

        <div x-data="{open:false}">    
        <x-primary-button class="p-2 m-2"  @click="open = !open" >Aggiungi cliente</x-primary-button>


        <div x-show="open" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-5 ">
        <form class="flex items-center justify-center" action="{{ route('customer.store') }}" method="POST"  >
        @csrf
        <div class="p-2 m-2">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
         </div>
         <div class="p-2 m-2">   
         <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
         </div>
         <div class="p-2 m-2">
         <x-input-label for="birth_date" :value="__('Birdth_Date')" />
        <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autofocus autocomplete="birth_date" />
        <x-input-error class="mt-2" :messages="$errors->get('birdth_date')" />
        </div>
         <div class="p-2 m-2">
         <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />
         </div>
         <div class="p-2 m-2">
         <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        <div class="p-2 m-2">
        <x-primary-button type="submit"  class="p-2 m-2 bg-green-500 text-dark">Aggiungi</x-primary-button>
        </div>
        </form>
        </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                
                <div class="p-6 text-red-900 dark:text-gray-100 ">
                    @livewire('customer')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
