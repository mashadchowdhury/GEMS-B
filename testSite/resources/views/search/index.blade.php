<x-app-layout>
    <script>
        console.log($searchResult);
    </script>
    {{-- @if ( empty($searchResult) )
        <div class="max-w-2xl mx-2 p-4 sm:p-6 lg:p-8 bg-white rounded-lg border border-gray-200 shadow-md">
            No results found
        </div>
    @endif --}}
    <div>
        @foreach ($region as $region)
        <p class="mt-4 text-lg text-gray-900 max-w-2xl mx-2 p-4 sm:p-6 lg:p-8 bg-white rounded-lg border border-gray-200 shadow-md">
            <b>{{$region->name_region}}</b>
            <br>Available Accommodations:
            {{$region->amount_accommodations}}
            <br>Current Bookings:
            {{$region->amount_bookings}}
            <br>Available Rooms:
            {{$region->available_rooms}}
        </p>
        @endforeach
    </div>
    <div>
        @foreach ($group as $group)
        <p class="mt-4 text-lg text-gray-900 max-w-2xl mx-2 p-4 sm:p-6 lg:p-8 bg-white rounded-lg border border-gray-200 shadow-md">
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
        @endforeach
    </div>
    <div>
        @foreach ($accommodation as $accommodation)
        <p class="mt-4 text-lg text-gray-900 max-w-2xl mx-2 p-4 sm:p-6 lg:p-8 bg-white rounded-lg border border-gray-200 shadow-md">
            <br>Accommodation Name: 
            <b>{{$accommodation->name_accommodation}}</b>
            <br>Region Location:
            {{$accommodation->name_region}}
            <br>Address:
            {{$accommodation->address}}
            <br>Email:
            {{$accommodation->email_accommodation}}
            <br>Room Type:
            {{$accommodation->room_type}}
            <br>Number of Rooms:
            {{$accommodation->number_of_rooms}}
            <br>Number of Beds:
            {{$accommodation->number_of_beds}}
            <br>ESS Support:
            {{$accommodation->ESS_support}}
            <br>Nearby Restaurants:
            {{$accommodation->restaurant_available}}
            <br>Pet-friendly:
            {{$accommodation->pets_allowed}}
            <br>Disability Access:
            {{$accommodation->accessibility_available}}
            <br>Wheelchair Access:
            {{$accommodation->accessibility_wheelchair}}
            <br>Walker Access:
            {{$accommodation->accessibility_walker}}
        </p>
        @endforeach
    </div>
</x-app-layout>