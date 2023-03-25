<x-app-layout> 
    <div class="relative mt-2 flex">
        <div class="relative flex-auto m-5 p-5 w-full h-full bg-gray-400 overflow-y-auto overflow-x-hidden rounded-lg border border-gray-200 shadow-md">
            <!-- Main Body -->
            <table class="w-full border-collapse bg-white text-left text-sm">
                <thead class="bg-gray-50 text-center">
                <tr>
                    <th scope="col" class="px-6 py-4 font-bold text-black">Region</th>
                    <th scope="col" class="px-6 py-4 font-bold text-black">Available Accommodations</th>
                    <th scope="col" class="px-6 py-4 font-bold text-black">Current Bookings</th>
                    <th scope="col" class="px-6 py-4 font-bold text-black">Available Rooms</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($region as $region)
                <tr class="hover:bg-gray-50 text-center">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-sm">{{$region->name_region}}</div>
                    </th>
                    <td class="px-6 py-4 text-sm font-medium text-gray-700">
                        <div>{{$region->amount_accommodations}}</div>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-700">
                        <div>{{$region->amount_bookings}}</div>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-700">
                        <div>{{$region->available_rooms}}</div>
                    </td>
                    <td class="px-6 py-4">
                    <div class="flex justify-end">
                        @if ($region->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('region.edit', $region)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('region.destroy', $region) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('region.destroy', $region)" onclick="event.preventDefault(); this.closest('form').submit();">
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
                                $count = DB::table('regions')->count();
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
                            {{-- <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
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
                            </a> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <span  class="p-4 text-sm bg-white rounded-lg border border-gray-200 shadow-md">
            <!-- Pop-up Form -->
            <form method="POST" action="{{ route('region.store') }}">
                @csrf
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
                <x-primary-button class="mt-4">{{ __('Create Region') }}</x-primary-button>
            </form>
        </span>
    </div>
</x-app-layout>