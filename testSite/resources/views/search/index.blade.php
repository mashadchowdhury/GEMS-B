<x-app-layout>
    <script>
        console.log($searchResult);
    </script>
    <div>
        @foreach ($region as $region)
        <p class="mt-4 text-lg text-gray-900">
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
        @endforeach
    </div>
    <div>
        @foreach ($accommodation as $accommodation)
        <p>
            <br>Accommodation Name: 
            <b>{{$accommodation->name_accommodation}}</b>
        </p>
        @endforeach
    </div>
</x-app-layout>