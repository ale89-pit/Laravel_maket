<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>
       <div class="border-b border-gray-200 dark:border-gray-700"> 
          <form class="flex items-center justify-center" action="{{ route('customer.update',$customer->id) }}" method="post"  @submit.prevent>
        @csrf
        @method('put')
        <div class="p-2 m-2">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$customer->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
         </div>
         <div class="p-2 m-2">   
         <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email',$customer->email)" required autofocus autocomplete="email" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
         </div>
         <div class="p-2 m-2">
         <x-input-label for="birth_date" :value="__('Birdth_Date')" />
        <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date',date('Y-m-d',strtotime($customer->birth_date)))" required autofocus autocomplete="birth_date" />
        <x-input-error class="mt-2" :messages="$errors->get('birdth_date')" />
        </div>
         <div class="p-2 m-2">
         <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address',$customer->address)" required autofocus autocomplete="address" />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />
         </div>
         <div class="p-2 m-2">
         <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone',$customer->phone)" required autofocus autocomplete="phone" />
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        <div class="p-2 m-2">
        <x-primary-button type="submit"  class="p-2 m-2 bg-blue-500 text-dark">Modifica</x-primary-button>
        </div>
        </form>
    </div>
        <div class="mx-auto px-6 container">
             <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('Sales ')}}
        </h2>
        </div>
        <div>
        @livewire('item-view', ['items'=>$customer['items']])
        </div>
</x-app-layout>

