<x-app-layout> 
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('region.update', $region) }}">
            @csrf
            @method('patch') 
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
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('region.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>