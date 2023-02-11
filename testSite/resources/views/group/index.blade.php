<x-app-layout>
        <!-- Left Sidebar -->
        <div class="bg-grey">
            <div>
            <!--
                Mobile filter dialog
        
                Off-canvas filters for mobile, show/hide based on off-canvas filters state.
            -->
                <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                    <!--
                    Off-canvas menu backdrop, show/hide based on off-canvas menu state.
            
                    Entering: "transition-opacity ease-linear duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                    Leaving: "transition-opacity ease-linear duration-300"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="fixed inset-0 bg-black bg-opacity-25"></div>
            
                    <div class="fixed inset-0 z-40 flex">
                    <!--
                        Off-canvas menu, show/hide based on off-canvas menu state.
            
                        Entering: "transition ease-in-out duration-300 transform"
                        From: "translate-x-full"
                        To: "translate-x-0"
                        Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                        <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        </div>
            
                        <!-- Filters -->
                        <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                            <li>
                            <a href="#" class="block px-2 py-3">Totes</a>
                            </li>
            
                            <li>
                            <a href="#" class="block px-2 py-3">Backpacks</a>
                            </li>
            
                            <li>
                            <a href="#" class="block px-2 py-3">Travel Bags</a>
                            </li>
            
                            <li>
                            <a href="#" class="block px-2 py-3">Hip Bags</a>
                            </li>
            
                            <li>
                            <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
                            </li>
                        </ul>
            
                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Color</span>
                                <span class="ml-6 flex items-center">
                                <!--
                                    Expand icon, show/hide based on section open state.
            
                                    Heroicon name: mini/plus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                </svg>
                                <!--
                                    Collapse icon, show/hide based on section open state.
            
                                    Heroicon name: mini/minus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-0">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">White</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Beige</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Blue</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Brown</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">Green</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Purple</label>
                                </div>
                            </div>
                            </div>
                        </div>
            
                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">Category</span>
                                <span class="ml-6 flex items-center">
                                <!--
                                    Expand icon, show/hide based on section open state.
            
                                    Heroicon name: mini/plus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                </svg>
                                <!--
                                    Collapse icon, show/hide based on section open state.
            
                                    Heroicon name: mini/minus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-1">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">New Arrivals</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                </div>
                            </div>
                            </div>
                        </div>
            
                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                                <span class="font-medium text-gray-900">Size</span>
                                <span class="ml-6 flex items-center">
                                <!--
                                    Expand icon, show/hide based on section open state.
            
                                    Heroicon name: mini/plus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                </svg>
                                <!--
                                    Collapse icon, show/hide based on section open state.
            
                                    Heroicon name: mini/minus
                                -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-2">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">2L</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">6L</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">12L</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">18L</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">20L</label>
                                </div>
            
                                <div class="flex items-center">
                                <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500">40L</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
        
            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
        
                <div class="flex items-center">
                    <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        Sort
                        <!-- Heroicon name: mini/chevron-down -->
                        <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </div>
        
                    <!--
                        Dropdown menu, show/hide based on menu state.
        
                        Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                        <!--
                            Active: "bg-gray-100", Not Active: ""
        
                            Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                        -->
                        <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                        </div>
                    </div>
                    </div>
        
                    <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                    <span class="sr-only">View grid</span>
                    <!-- Heroicon name: mini/squares-2x2 -->
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                    </svg>
                    </button>
                    <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                    <span class="sr-only">Filters</span>
                    <!-- Heroicon name: mini/funnel -->
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
                </div>
        
                <section aria-labelledby="products-heading" class="pt-6 pb-24">
                <h2 id="products-heading" class="sr-only">Products</h2>
        
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form class="hidden lg:block">
                    <h3 class="sr-only">Categories</h3>
                    <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                        <li>
                        <a href="#">Totes</a>
                        </li>
        
                        <li>
                        <a href="#">Backpacks</a>
                        </li>
        
                        <li>
                        <a href="#">Travel Bags</a>
                        </li>
        
                        <li>
                        <a href="#">Hip Bags</a>
                        </li>
        
                        <li>
                        <a href="#">Laptop Sleeves</a>
                        </li>
                    </ul>
        
                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                            <span class="font-medium text-gray-900">Color</span>
                            <span class="ml-6 flex items-center">
                            <!--
                                Expand icon, show/hide based on section open state.
        
                                Heroicon name: mini/plus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                            <!--
                                Collapse icon, show/hide based on section open state.
        
                                Heroicon name: mini/minus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-0">
                        <div class="space-y-4">
                            <div class="flex items-center">
                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Green</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                            </div>
                        </div>
                        </div>
                    </div>
        
                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                            <span class="font-medium text-gray-900">Category</span>
                            <span class="ml-6 flex items-center">
                            <!--
                                Expand icon, show/hide based on section open state.
        
                                Heroicon name: mini/plus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                            <!--
                                Collapse icon, show/hide based on section open state.
        
                                Heroicon name: mini/minus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-1">
                        <div class="space-y-4">
                            <div class="flex items-center">
                            <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New Arrivals</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-category-3" class="ml-3 text-sm text-gray-600">Organization</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-category-4" class="ml-3 text-sm text-gray-600">Accessories</label>
                            </div>
                        </div>
                        </div>
                    </div>
        
                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                            <span class="font-medium text-gray-900">Size</span>
                            <span class="ml-6 flex items-center">
                            <!--
                                Expand icon, show/hide based on section open state.
        
                                Heroicon name: mini/plus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                            <!--
                                Collapse icon, show/hide based on section open state.
        
                                Heroicon name: mini/minus
                            -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-2">
                        <div class="space-y-4">
                            <div class="flex items-center">
                            <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>
                            </div>
        
                            <div class="flex items-center">
                            <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
        
                    <!-- Product grid -->
                    <div class="lg:col-span-3">
                    <!-- Replace with your content -->
                    <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 lg:h-full"></div>
                    <!-- /End replace -->
                    </div>
                </div>
                </section>
            </main>
            </div>
        </div>
    {{-- <div class="block border-x-4 border-indigo-500 rounded-sm max-w-2xl mx-52 p-4 sm:p-6 lg:p-8">
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
            <label for="booked">Booked Status:</label>
            <input 
                type="checkbox" 
                id="booked" 
                name="booked" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accommodation">Current Accommodation if applicable:</label><br>
            <input 
                type="text" 
                id="accommodation" 
                name="accommodation" 
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
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-primary-button class="mt-4">{{ __('Create Group') }}</x-primary-button>
        </form>
    </div>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($group as $group)
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $group->user->name }}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $group->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($group->created_at->eq($group->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                            @endunless
                        </div>
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
                </div>
            </div>
        @endforeach
    </div> --}}
</x-app-layout>