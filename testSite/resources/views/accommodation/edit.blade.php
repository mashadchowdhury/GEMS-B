<x-app-layout>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css" integrity="sha512-Ars0BmSwpsUJnWMw+KoUKGKunT7+T8NGK0ORRKj+HT8naZzLSIQoOSIIM3oyaJljgLxFi0xImI5oZkAWEFARSA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        ></script>
        <script>
            $(document).ready(function () {
                $('select').selectize({
                    sortField: 'text'
                });
            });
        </script>
    </head>
    <br>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 text-sm bg-white rounded-lg border border-gray-200 shadow-md">
        <form method="POST" action="{{ route('accommodation.update', $accommodation) }}">
            @csrf
            @method('patch')
            <label for="name_accommodation">Name of Accommodation:</label><br>
            <input
                type="text"
                id="name_accommodation"
                name="name_accommodation"
                placeholder="{{ __('Eg: Hyatt Place') }}"
                value="{{$accommodation->name_accommodation}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="address">Address of Accommodation:</label><br>
            <input
                type="text"
                id="address"
                name="address"
                placeholder="{{ __('Eg: 1800 Main St.') }}"
                value="{{$accommodation->address}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="region">Location/Region:</label><br>
            <select id="name_region" name="name_region" placeholder="{{ __('Eg: Kelowna') }}" class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">>
                <option value="{{$accommodation->name_region}}">{{$accommodation->name_region}}</option>
                @foreach ($regions as $regions)
                <option value="{{$regions->name_region}}">{{$regions->name_region}}</option>
                @endforeach
            </select>
            <br>
            <label for="email_accommodation">Email of Accommodation:</label><br>
            <input
                type="email"
                id="email_accommodation"
                name="email_accommodation"
                placeholder="{{ __('Eg: frontdesk@company.com') }}"
                value="{{$accommodation->email_accommodation}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="room_type">Room Type:</label><br>
            <input
                type="text"
                id="room_type"
                name="room_type"
                placeholder="{{ __('Eg: Gymnasium, Hotel') }}"
                value="{{$accommodation->room_type}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="number_of_rooms">Number of Rooms:</label><br>
            <input
                type="number"
                id="number_of_rooms"
                name="number_of_rooms"
                placeholder="{{ __('Eg: 23') }}"
                value="{{$accommodation->number_of_rooms}}"
                min="0"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="number_of_beds">Number of Beds:</label><br>
            <input
                type="number"
                id="number_of_beds"
                name="number_of_beds"
                placeholder="{{ __('Eg: 58') }}"
                value="{{$accommodation->number_of_beds}}"
                min="0"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="ESS_support">ESS Supported here?:</label>
            <input type="hidden" name="ESS_support" value="0">
            @if ($accommodation->ESS_support == "1")
            <input 
                type="checkbox" 
                id="ESS_support" 
                name="ESS_support"
                value="1" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input
                type="checkbox"
                id="ESS_support"
                name="ESS_support"
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            <label for="restaurant_available">Restaurants available nearby?:</label>
            <input type="hidden" name="restaurant_available" value="0">
            @if($accommodation->restaurant_available == "1")
            <input 
                type="checkbox" 
                id="restaurant_available" 
                name="restaurant_available" 
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input
                type="checkbox"
                id="restaurant_available"
                name="restaurant_available"
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            <label for="pets_allowed">Pets allowed?:</label>
            <input type="hidden" name="pets_allowed" value="0">
            @if($accommodation->pets_allowed =="1")
            <input 
                type="checkbox" 
                id="pets_allowed" 
                name="pets_allowed" 
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input
                type="checkbox"
                id="pets_allowed"
                name="pets_allowed"
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            <label for="accessibility_available">Disability access available?:</label>
            <input type="hidden" name="accessibility_available" value="0">
            @if($accommodation->accessibility_available == "1")
            <input 
                type="checkbox" 
                id="accessibility_available" 
                name="accessibility_available" 
                value="Yes"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input 
                type="checkbox" 
                id="accessibility_available" 
                name="accessibility_available" 
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            <label for="accessibility_wheelchair">Wheelchair access available?:</label>
            <input type="hidden" name="accessibility_wheelchair" value="0">
            @if($accommodation->accessibility_wheelchair == "1")
            <input 
                type="checkbox" 
                id="accessibility_wheelchair" 
                name="accessibility_wheelchair"
                value="1" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input
                type="checkbox"
                id="accessibility_wheelchair"
                name="accessibility_wheelchair"
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            <label for="accessibility_walker">Walker access available?:</label>
            <input type="hidden" name="accessibility_walker" value="0">
            @if($accommodation->accessibility_walker == "1")
            <input 
                type="checkbox" 
                id="accessibility_walker" 
                name="accessibility_walker" 
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                checked>
            <br>
            @else
            <input
                type="checkbox"
                id="accessibility_walker"
                name="accessibility_walker"
                value="1"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            @endif

            
            <!-- <input
                type="text"
                id="name_region"
                name="name_region"
                placeholder="{{ __('Eg: Kelowna') }}"
                value="{{$accommodation->name_region}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"> -->
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('accommodation.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
