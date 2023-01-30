<?php
$pageTitle = 'Form';
include("base.php");
include("data/data.php");

$results = $db->query('SELECT * FROM qrpatients');
$locations = array();
while ($row = $results->fetchArray()) {
    $locations[] = array(
        'qr' => $row['qr'],
        'farbe' => $row['farbe'],
        'latitude' => $row['latitude'],
        'longitude' => $row['longitude'],
        'name' => $row['name'],
        'vorname' => $row['vorname'],
        'kurzdiagnose' => $row['kurzdiagnose']
    );
}
$locations_json = json_encode($locations);
echo "<script>var locations = " . $locations_json . ";</script>";
?>

<body>
    <h1> Patientenübersicht </h1>
    <div id="map" style="width: 100%; height: 500px;"></div>
        
    <h3>Legende:</h3> 
    <dl> 
        <dt><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png" alt="Rot"></dt>
        <dd> - T I sofortige Behandlung </dd>

        <dt><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png" alt="Gelb"></dt>
        <dd> - T II abwartende Behandlung </dd>

        <dt><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png" alt="Grün"></dt>
        <dd> - T III sofortige Transportpriorität </dd>

        <dt><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png" alt="Blau"></dt>
        <dd> - T IV Betreuung </dd>

        <dt><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png" alt="Schwarz"></dt>
        <dd> - Patient verstorben </dd>
    </dl>
        
</body>   
