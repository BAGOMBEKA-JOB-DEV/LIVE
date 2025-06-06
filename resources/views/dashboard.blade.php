<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LIVEWIRE CONTACT MANAGER') }}
        </h2>
    </x-slot>

    <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("Hi,") }} {{ Auth::user()->name }}!  <span class="text-sm">{{ __(",now you can start creating your contacts") }}</span>
            </div>
        </div>
    </div>
</div>


    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('contact-crud')
        </div>
    </div>
</x-app-layout>
