<x-app-layout>
    <script>
        console.log($searchResult);
    </script>
    <div>
        <p class="mt-4 text-lg text-gray-900">
            <b>{{$searchResult->name_region}}</b>
            <br>Available Accommodations:
            {{$searchResult->amount_accommodations}}
            <br>Current Bookings:
            {{$searchResult->amount_bookings}}
            <br>Available Rooms:
            {{$searchResult->available_rooms}}
        </p>
    </div>
</x-app-layout>