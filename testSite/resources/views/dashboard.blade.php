<x-app-layout>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

    <body class="antialiased">
        <div class="relative flex m-4 p-4 justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0 rounded-lg border border-gray-200 shadow-md">
        <x-mapbox 
        id="map" 
        class="relative flex m-4 p-4 justify-center min-h-screen sm:items-center sm:pt-6 rounded-lg border-2 border-black shadow-md" 
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
