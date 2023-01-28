<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('accommodation.update', $accommodation) }}">
            @csrf
            @method('patch')
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
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('accommodation.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>