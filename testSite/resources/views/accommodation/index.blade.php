<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('accommodation.store') }}">
            @csrf
            <label for="name_accommodation">Name of Accommodation:</label><br>
            <input 
                type="text" 
                id="name_accommodation" 
                name="name_accommodation" 
                placeholder="{{ __('Eg: Hyatt Place') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="address">Address of Accommodation:</label><br>
            <input 
                type="text" 
                id="address" 
                name="address" 
                placeholder="{{ __('Eg: 1800 Main St.') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_accommodation">Email of Accommodation:</label><br>
            <input 
                type="email" 
                id="email_accommodation" 
                name="email_accommodation" 
                placeholder="{{ __('Eg: frontdesk@company.com') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="room_type">Room Type:</label><br>
            <input 
                type="text" 
                id="room_type" 
                name="room_type" 
                placeholder="{{ __('Eg: Gymnasium, Hotel') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="number_of_rooms">Number of Rooms:</label><br>
            <input 
                type="text" 
                id="number_of_rooms" 
                name="number_of_rooms" 
                placeholder="{{ __('Eg: 23') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="number_of_beds">Number of Beds:</label><br>
            <input 
                type="text" 
                id="number_of_beds" 
                name="number_of_beds" 
                placeholder="{{ __('Eg: 58') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="ESS_support">ESS Supported here?:</label>
            <input 
                type="checkbox" 
                id="ESS_support" 
                name="ESS_support" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="restaurant_available">Restaurants available nearby?:</label>
            <input 
                type="checkbox" 
                id="restaurant_available" 
                name="restaurant_available" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="pets_allowed">Pets allowed?:</label>
            <input 
                type="checkbox" 
                id="pets_allowed" 
                name="pets_allowed" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accessibility_available">Disability access available?:</label>
            <input 
                type="checkbox" 
                id="accessibility_available" 
                name="accessibility_available" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accessibility_wheelchair">Wheelchair access available?:</label>
            <input 
                type="checkbox" 
                id="accessibility_wheelchair" 
                name="accessibility_wheelchair" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accessibility_walker">Walker access available?:</label>
            <input 
                type="checkbox" 
                id="accessibility_walker" 
                name="accessibility_walker" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="region">Location/Region:</label><br>
            <input 
                type="text" 
                id="region" 
                name="region" 
                placeholder="{{ __('Eg: Kelowna') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-primary-button class="mt-4">{{ __('Create Accommodation') }}</x-primary-button>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($accommodation as $accommodation)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $accommodation->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $accommodation->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($accommodation->created_at->eq($accommodation->updated_at))
                                <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($accommodation->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('accommodation.edit', $accommodation)">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('accommodation.destroy', $accommodation) }}">
                                        @csrf
                                        @method('delete')
                                        <x-dropdown-link :href="route('accommodation.destroy', $accommodation)" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                            @endif
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>