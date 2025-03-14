<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Authenticated?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Task: add a condition to show correct text --}}
                    @if(auth()->check())
                        <h1>{{ 'Yes, I am logged in as '. auth()->user()->email }}</h1>
                    @else
                        <h1>No, I am not logged in.</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
