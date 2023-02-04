<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('region.store') }}">
            @csrf
            <label for="name_region">Region name:</label><br>
            <input 
                type="text" 
                id="name_region" 
                name="name_region" 
                placeholder="{{ __('Eg: West Kelowna') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="amount_accommodations">Amount of Available Accommodations:</label><br>
            <input 
                type="text" 
                id="amount_accommodations" 
                name="amount_accommodations" 
                placeholder="{{ __('Eg: 7') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="amount_bookings">Amount of Current Bookings:</label><br>
            <input 
                type="text" 
                id="amount_bookings" 
                name="amount_bookings" 
                placeholder="{{ __('Eg: 40') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="available_rooms">Amount of Available Rooms:</label><br>
            <input 
                type="text" 
                id="available_rooms" 
                name="available_rooms" 
                placeholder="{{ __('Eg: 83') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-primary-button class="mt-4">{{ __('Create Region') }}</x-primary-button>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($region as $region)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $region->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $region->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($region->created_at->eq($region->updated_at))
                                <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($region->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('region.edit', $region)">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('region.destroy', $region) }}">
                                        @csrf
                                        @method('delete')
                                        <x-dropdown-link :href="route('region.destroy', $region)" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                            @endif
                        </div>
                        <p class="mt-4 text-lg text-gray-900">
                            <b>{{$region->name_region}}</b>
                            <br>Available Accommodations:
                            {{$region->amount_accommodations}}
                            <br>Current Bookings:
                            {{$region->amount_bookings}}
                            <br>Available Rooms:
                            {{$region->available_rooms}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>