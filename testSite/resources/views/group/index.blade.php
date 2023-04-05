<x-app-layout>
    <div class="relative mt-2 flex">
        <div class="relative flex-auto m-5 p-5 w-full h-full overflow-y-auto overflow-x-hidden rounded-lg border border-gray-200 shadow-md" style="overflow: auto;">
            <!-- Main Body -->
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-1 py-4">Name</th>
                    <th scope="col" class="px-1 py-4">Booked</th>
                    <th scope="col" class="px-1 py-4">Accommodation</th>
                    <th scope="col" class="px-1 py-4">Primary Contact</th>
                    <th scope="col" class="px-1 py-4">Primary Phone</th>
                    <th scope="col" class="px-1 py-4">Primary Email</th>
                    <th scope="col" class="px-1 py-4">Secondary Contact</th>
                    <th scope="col" class="px-1 py-4">Secondary Phone</th>
                    <th scope="col" class="px-1 py-4">Secondary Email</th>
                    <th scope="col" class="px-1 py-4">ESS-Group</th>
                    <th scope="col" class="px-1 py-4">Headcount</th>
                    <th scope="col" class="px-1 py-4">Adult Count</th>
                    <th scope="col" class="px-1 py-4">Child Count</th>
                    <th scope="col" class="px-1 py-4">Pet Count</th>
                    <th scope="col" class="px-1 py-4">Accessibility Needs</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($group as $group)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-1 py-4 font-normal text-gray-900">
                        <div class="text-sm">{{$group->name_group}}</div>
                    </th>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->booked ? "Yes" : "No"}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->name_accommodation}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->name_primary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->telephone_primary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->email_primary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->name_secondary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->telephone_secondary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->email_secondary_contact}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->is_ESS_group ? "Yes" : "No"}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->group_count}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->adult_count}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->children_count}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->pet_count}}</div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div>{{$group->need_accessibility ? "Yes" : "No"}}</div>
                    </td>
                    <td class="px-1 py-4">
                    <div class="flex justify-end">
                        @if ($group->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('group.edit', $group)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('group.destroy', $group) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('group.destroy', $group)" onclick="event.preventDefault(); this.closest('form').submit();">
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
                                $count = DB::table('groups')->count();
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

        <span  class="p-4 text-sm bg-white rounded-lg border border-gray-200 shadow-md">
            <!-- Pop-up Form -->
            <form method="POST" action="{{ route('group.store') }}">
                @csrf
                <label for="name_group">Group Name:</label><br>
                <input
                    type="text"
                    id="name_group"
                    name="name_group"
                    placeholder="{{ __('Eg: South Bend EMS') }}"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <input type="hidden" name="booked" value="1">
                <input type="hidden" name="name_accommodation" value="None">
                <!-- <label for="booked">Booked Status:</label>
                
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
                <br> -->
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
                <!-- <input type="hidden" name="is_ESS_group" value="No"> -->
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
                <!-- <input type="hidden" name="need_accessibility" value="No"> -->
                <input
                    type="checkbox"
                    id="need_accessibility"
                    name="need_accessibility"
                    value="1"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-primary-button class="mt-4">{{ __('Create Group') }}</x-primary-button>
            </form>
        </span>
    </div>
</x-app-layout>
