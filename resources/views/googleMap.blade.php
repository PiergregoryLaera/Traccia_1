<x-layout>
    
    <div id="map" style="height: 400px;">

    </div>

    <script type="text/javascript">
        let comune = {!! json_encode($comune) !!};

        console.log(comune);
    
        function initMap() {
            const myLatLng = {
                lat: comune.lat,
                lng: comune.long
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: myLatLng,
            });

            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Hello Rajkot!",
            });
        }

        window.initMap = initMap;
    </script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?callback=initMap"></script>
</x-layout>