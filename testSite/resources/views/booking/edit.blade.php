<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8" style="overflow: auto;">
        <form method="POST" action="{{ route('booking.update', $booking) }}">
            @csrf
            @method('patch')
            <label for="accommodation">Accommodation:</label><br>
            <input
                type="text"
                id="name_accommodation"
                name="name_accommodation"
                placeholder="{{ __('Eg: Hyatt Place') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="group">Group:</label><br>
            <input
                type="text"
                id="name_group"
                name="name_group"
                placeholder="{{ __('Eg: Penticton Fire Dept.') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="from_date">Booking Start Date:</label><br>
            <input
                type="date"
                id="from_date"
                name="from_date"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="to_date">Booking End Date:</label><br>
            <input
                type="date"
                id="to_date"
                name="to_date"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('booking.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form> 
    </div>
</x-app-layout>
