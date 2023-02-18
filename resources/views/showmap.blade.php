@extends('layouts.app')
 @csrf
 @section('content')
 <div id="mapid" class="center-block" style="width: 100%; height: 400px;"></div>
 <script>
     var mymap = L.map('mapid');
     var icon = new L.Icon.Default();
     icon.options.shadowSize = [0,0];
     L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWNob3ciLCJhIjoiY2xkeXYwMndyMGZyajNycG9yM3R5bmhucyJ9.bm2iB9CPeSSXP65DBdkugA', {
         attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         maxZoom: 18,
         id: 'mapbox/streets-v11',
         tileSize: 512,
         zoomOffset: -1,
     }).addTo(mymap);
 mymap.setView(new L.LatLng(53.4053, -6.3784), 13); 
 </script>
 @endsection