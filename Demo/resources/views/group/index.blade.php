<x-app-layout>
    <div class="block border-x-4 border-indigo-500 rounded-sm max-w-2xl mx-52 p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('group.store') }}">
            @csrf
            <label for="name_group">Group Name:</label><br>
            <input 
                type="text" 
                id="name_group"     
                name="name_group" 
                placeholder="{{ __('Eg: South Bend EMS') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="booked">Booked Status:</label>
            <input 
                type="checkbox" 
                id="booked" 
                name="booked" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accommodation">Current Accommodation if applicable:</label><br>
            <input 
                type="text" 
                id="accommodation" 
                name="accommodation" 
                placeholder="{{ __('Eg: Hyatt Place') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="name_primary_contact">Name of Primary Contact:</label><br>
            <input 
                type="text" 
                id="name_primary_contact" 
                name="name_primary_contact" 
                placeholder="{{ __('Eg: John Smith') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="telephone_primary_contact">Phone of Primary Contact:</label><br>
            <input 
                type="text" 
                id="telephone_primary_contact" 
                name="telephone_primary_contact" 
                placeholder="{{ __('Eg: 555-555-5555') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_primary_contact">Email of Primary Contact:</label><br>
            <input 
                type="text" 
                id="email_primary_contact" 
                name="email_primary_contact" 
                placeholder="{{ __('Eg: frontdesk@company.com') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="name_secondary_contact">Name of Secondary Contact:</label><br>
            <input 
                type="text" 
                id="name_secondary_contact" 
                name="name_secondary_contact" 
                placeholder="{{ __('Eg: Jane Smith') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="telephone_secondary_contact">Phone of Secondary Contact:</label><br>
            <input 
                type="text" 
                id="telephone_secondary_contact" 
                name="telephone_secondary_contact" 
                placeholder="{{ __('Eg: 555-555-5555') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_secondary_contact">Email of Secondary Contact:</label><br>
            <input 
                type="text" 
                id="email_secondary_contact" 
                name="email_secondary_contact" 
                placeholder="{{ __('Eg: frontdesk@company.com') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="is_ESS_group">ESS:</label>
            <input 
                type="checkbox" 
                id="is_ESS_group" 
                name="is_ESS_group" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="group_count">Group Headcount:</label><br>
            <input 
                type="number" 
                id="group_count" 
                name="group_count" 
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="adult_count">Adult Headcount:</label><br>
            <input 
                type="number" 
                id="adult_count" 
                name="adult_count" 
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="children_count">Child Under-18 Headcount:</label><br>
            <input 
                type="number" 
                id="children_count" 
                name="children_count" 
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="pet_count">Pet Headcount:</label><br>
            <input 
                type="number" 
                id="pet_count" 
                name="pet_count" 
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="need_accessibility">Accessibility Needs?:</label>
            <input 
                type="checkbox" 
                id="need_accessibility" 
                name="need_accessibility" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-primary-button class="mt-4">{{ __('Create Group') }}</x-primary-button>
        </form>
    </div>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($group as $group)
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $group->user->name }}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $group->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($group->created_at->eq($group->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                            @endunless
                        </div>
                        @if ($group->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('group.edit', $group)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('group.destroy', $group) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('group.destroy', $group)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @endif
                    </div>
                    <p class="mt-4 text-lg text-gray-900">
                        <b>{{$group->name_group}}</b>
                        <br>Available Accommodations:
                        {{$group->booked}}
                        <br>Current Bookings:
                        {{$group->accommodation}}
                        <br>Available Rooms:
                        {{$group->name_primary_contact}}
                        <br>Available Accommodations:
                        {{$group->telephone_primary_contact}}
                        <br>Current Bookings:
                        {{$group->email_primary_contact}}
                        <br>Available Rooms:
                        {{$group->name_secondary_contact}}
                        <br>Available Accommodations:
                        {{$group->telephone_secondary_contact}}
                        <br>Current Bookings:
                        {{$group->email_secondary_contact}}
                        <br>Available Rooms:
                        {{$group->group_count}}
                        <br>Available Accommodations:
                        {{$group->adult_count}}
                        <br>Current Bookings:
                        {{$group->children_count}}
                        <br>Available Rooms:
                        {{$group->pet_count}}
                        <br>Available Accommodations:
                        {{$group->need_accessibility}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>