<x-app-layout>
    <div class="relative mt-2 flex">
        <div class="relative flex-auto m-5 p-5 w-full h-full overflow-y-auto overflow-x-hidden rounded-lg border border-gray-200 shadow-md">
            <!-- Main Body -->
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50 font-medium text-gray-900">
                <tr>
                    <th scope="col" class="px-6 py-4">Accommodation</th>
                    <th scope="col" class="px-6 py-4">Region Location</th>
                    <th scope="col" class="px-6 py-4">Address</th>
                    <th scope="col" class="px-6 py-4">Email</th>
                    <th scope="col" class="px-6 py-4">Room Type</th>
                    <th scope="col" class="px-6 py-4">Number of Rooms</th>
                    <th scope="col" class="px-6 py-4">Number of Beds</th>
                    <th scope="col" class="px-6 py-4">ESS Support</th>
                    <th scope="col" class="px-6 py-4">Nearby Restaurants</th>
                    <th scope="col" class="px-6 py-4">Pet-friendly</th>
                    <th scope="col" class="px-6 py-4">Disability Access</th>
                    <th scope="col" class="px-6 py-4">Wheelchair Access</th>
                    <th scope="col" class="px-6 py-4">Walker Access</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($accommodation as $accommodation)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-sm">
                            <div>{{$accommodation->name_accommodation}}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <span class="text-sm">
                            <div class="font-medium text-gray-700">{{$accommodation->amount_accommodations}}</div>
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm">
                            <div class="font-medium text-gray-700">{{$accommodation->amount_bookings}}</div>
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm">
                            <div class="font-medium text-gray-700">{{$accommodation->available_rooms}}</div>
                        </span>
                    </td>
                    <td class="px-6 py-4">
                    <div class="flex justify-end">
                        @if ($accommodation->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('accommodation.edit', $accommodation)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('accommodation.destroy', $accommodation) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('accommodation.destroy', $accommodation)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @endif
                    </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!--Bottom Bar-->
            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            <?php
                                $count = DB::table('accommodations')->count();
                            ?>
                            Showing
                            <span class="font-medium">
                                <?php 
                                    if ($count > 0)
                                        echo "1";
                                    else
                                        echo "0";
                                ?>
                            </span>
                            to
                            <span class="font-medium">
                                <?php 
                                    if ($count < 20)
                                        echo $count;
                                    else
                                        echo "20";
                                ?>
                            </span>
                            of
                            <span class="font-medium">
                                <?php 
                                    echo $count;
                                ?>
                            </span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: mini/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <span  class="">
            <!-- Pop-up Form -->
            <form method="POST" action="{{ route('accommodation.store') }}">
                @csrf
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
                <label for="name_region">Location/Region:</label><br>
                <input 
                    type="text" 
                    id="name_region" 
                    name="name_region" 
                    placeholder="{{ __('Eg: Kelowna') }}"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-primary-button class="mt-4">{{ __('Create Accommodation') }}</x-primary-button>
            </form>
        </span>
    </div>
    <!-- break -->
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($accommodation as $accommodation)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $accommodation->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $accommodation->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($accommodation->created_at->eq($accommodation->updated_at))
                                <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($accommodation->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('accommodation.edit', $accommodation)">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('accommodation.destroy', $accommodation) }}">
                                        @csrf
                                        @method('delete')
                                        <x-dropdown-link :href="route('accommodation.destroy', $accommodation)" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                            @endif
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ 
                            $booking->message 
                        }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
