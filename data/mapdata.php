<script>
//MAP.PHP
    $(document).ready(function() {
        // create the icon
        var LeafIcon = L.Icon.extend({
            options: {
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            }
        });
        var greenIcon = new LeafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png' }),
            redIcon = new LeafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png' }),
            yellowIcon = new LeafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png' }),
            blueIcon = new LeafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png' }),
            blackIcon = new LeafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png' });

        // create the map
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // add touch
        map.touchZoom.enable();

        // add locate control to the map
        map.locate({ setView: true, watch: true });
        L.control.locate({ setView: true }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
        var location = locations[i];
        if(location.farbe == "009900")
            {marker = L.marker([location.latitude, location.longitude], {icon: greenIcon}).addTo(map)}
        
        else if(location.farbe == "CC0000"){
            var marker = L.marker([location.latitude, location.longitude], {icon: redIcon}).addTo(map)}
             
        else if(location.farbe == "0000CC")
            {marker = L.marker([location.latitude, location.longitude], {icon: blueIcon}).addTo(map)}

        else if(location.farbe == "000000")
            {marker = L.marker([location.latitude, location.longitude], {icon: blackIcon}).addTo(map)}
        else
            {marker = L.marker([location.latitude, location.longitude], {icon: yellowIcon}).addTo(map)}

        marker.bindPopup("Kurzdiagnose: " + location.kurzdiagnose + "<br>QR Code: " + location.qr + "<br> Name: " + location.vorname + " "+ location.name)
        }
    });
</script>