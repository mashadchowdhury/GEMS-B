<x-app-layout>
    <div>
        <span>
            <!-- Left Sidebar -->
            <div class="relative flex-1 flex-shrink-0 bg-gray-800 text-white p-4">
                <a href="#" class="text-lg font-semibold uppercase">Logo</a>
            </div>
            <div class="relative flex-1 overflow-y-auto">
                <nav class="px-2 py-4">
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Home</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">About</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Contact</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Blog</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">FAQ</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Support</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Login</a>
                <a href="#" class="block py-2 text-gray-400 hover:text-white">Sign up</a>
                </nav>
            </div>
        </span>
        <span>
            <!-- Main Body -->
            <table>
                <tr>
                    <th>Region Name</th>
                    <th>Available Accomodations</th>
                    <th>Current Bookings</th>
                    <th>Available Rooms</th>
                </tr>
                @foreach ($region as $region)
                <tr>
                    <tr><b>{{$region->name_region}}</b></tr>
                    <tr>{{$region->amount_accommodations}}</tr>
                    <tr>{{$region->amount_bookings}}</tr>
                    <tr>{{$region->available_rooms}}</tr>
                </tr>
                @endforeach
            </table>
        </span>
        <span>
            <!-- Pop-up Form -->
        </span>
    </div>
</x-app-layout>