<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('group.update', $group) }}">
            @csrf
            @method('patch')
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
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accommodation">Current Accommodation if applicable:</label><br>
            <input
                type="text"
                id="name_accommodation"
                name="name_accommodation"
                placeholder="{{ __('Eg: Hyatt Place') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="telephone_primary_contact">Name of Primary Contact:</label><br>
            <input
                type="text"
                id="telephone_primary_contact"
                name="telephone_primary_contact"
                placeholder="{{ __('Eg: John Smith') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="name_primary_contact">Phone of Primary Contact:</label><br>
            <input
                type="text"
                id="name_primary_contact"
                name="name_primary_contact"
                placeholder="{{ __('Eg: 555-555-5555') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_primary_contact">Email of Primary Contact:</label><br>
            <input
                type="email"
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
                type="email"
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
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="group_count">Group Headcount:</label><br>
            <input
                type="text"
                id="group_count"
                name="group_count"
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="adult_count">Adult Headcount:</label><br>
            <input
                type="text"
                id="adult_count"
                name="adult_count"
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="children_count">Child Under-18 Headcount:</label><br>
            <input
                type="text"
                id="children_count"
                name="children_count"
                placeholder="{{ __('Eg: 20') }}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="pet_count">Pet Headcount:</label><br>
            <input
                type="text"
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
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('group.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
