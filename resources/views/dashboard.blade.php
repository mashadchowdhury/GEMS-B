<x-app-layout>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
                
            </div>
    </div> -->

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <x-mapbox 
    id="map" 
    class="hellomap" 
    style="height: 500px; width: 1175px;" 
    :center="['long' => -120, 'lat' => 49.93]"
    :navigationControls="true"
    :interactive="true"
    :markers="[['long' => -119.5, 'lat' => 49.89,'description' => 'Kelowna'], 
    ['long' => -120.33, 'lat' => 50.67,'description' => 'Kamloops 1'], 
    ['long' => -120.5, 'lat' => 50.79,'description' => 'Kamloops 2'],
    ['long' => -120.79, 'lat' => 50.11,'description' => 'Merritt'],
    ['long' => -122.75, 'lat' => 53.92,'description' => 'Prince George'],
    ['long' => -121.44, 'lat' => 49.38,'description' => 'Hope'],
    ['long' => -117.66, 'lat' => 49.32,'description' => 'Castlegar']]" />   
                    
    </body>
    
    
   
</x-app-layout>
