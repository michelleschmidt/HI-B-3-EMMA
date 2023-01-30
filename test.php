if (isset($_POST['submit'])) {
        $date = $_POST['Datum'];
        $firstname = trim($_POST['Name']);
        $lastname = trim($_POST['Vorname']);
        $birthdate = trim($_POST['Geburtsdatum']);
        $race = trim($_POST['Nationalität']);
        $sex = $_POST['geschlecht'];
        $sichtung1 = $_POST['sichtung1'];
        $kategorie1 = $_POST['kategorie1'];
        $sichtung2 = $_POST['sichtung2'];
        $kategorie2 = $_POST['kategorie2'];
        $sichtung3 = $_POST['sichtung3'];
        $kategorie3 = $_POST['kategorie3'];
        $sichtung4 = $_POST['sichtung4'];
        $kategorie4 = $_POST['kategorie4'];
        $transportm = $_POST['Transportmittel'];
        $transportz = $_POST['Transportziel'];
        $transport = $_POST['transport'];
        $priorität =  ['Priorität'];
        $copy1 =  $_POST['copy1'];
        $copy2 =  $_POST['copy2'];
        $weiter1 =  $_POST['weiter1'];
        $weiter2 =  $_POST['weiter2'];
        $kurzdiagnose = trim($_POST['kurzdiagnose']);
        $verletzung = trim($_POST['verletzung']);
        $verbrennung = trim($_POST['verbrennung']);
        $erkrankung = trim($_POST['erkrankung']);
        $vergiftung = trim($_POST['vergiftung']);
        $verstrahlung = trim($_POST['verstrahlung']);
        $psyche = trim($_POST['psyche']);
        $bewusstsein = $_POST['bewusstsein'];
        $atmung = $_POST['atmung'];
        $kreislauf = $_POST['kreislauf'];
        $infusion = trim($_POST['infusion']);
        $analgetika = trim($_POST['analgetika']);
        $antidote = trim($_POST['antidote']);
        $sonstigemedikamente = trim($_POST['sostigemedikamente']);
        $bemerkungen = trim($_POST['bemerkungen']);
        
        //defining variable as error handling
    
        $update = $db->query("UPDATE qrpatients SET datum =  '$date', vorname=  '$firstname', name=  '$lastname', dob=  '$birthdate', nationalitaet =  '$race', 
        sex=  '$sex' , sichtung1=  '$sichtung1' , sichtung2=  '$sichtung2' , sichtung3=  '$sichtung3' , sichtung4=  '$sichtung4' , 
        kategorie1=  '$kategorie1' , kategorie2=  '$kategorie2' , kategorie3=  '$kategorie3' , kategorie4=  '$kategorie4' , 
        transportmittel=  '$transportm' , transportziel=  '$transportz' , transport=  '$transport', ausfertigung1=  '$copy1',  
        ausfertigung2=  '$copy2' , weitergeleitet1=  '$weiter1' , weitergeleitet2=  '$weiter2' , kurzdiagnose=  '$kurzdiagnose' , verletzung=  '$verletzung',  
        verbrennung=  '$verbrennung' , erkrankung=  '$erkrankung' , vergiftunng=  '$vergiftung' , verstrahlung=  '$verstrahlung' , psyche=  '$psyche', 
        bewusstsein=  '$bewusstsein', atmung=  '$atmung', kreislauf=  '$kreislauf', infusion=  '$infusion' , analgetika=  '$analgetika' , antidote=  '$antidote', 
        sonstmedikamente=  '$sonstigemedikamente' , bemerkungen=  '$bemerkungen' WHERE qr = $QRCode");

        $db->exec($update);
        header('location: map.php');}
?>

<!-- WORKING -->

<body>
<?php
$pageTitle = 'Form';
include("base.php");
?>

<body>

    <div id="map" style="width: 100%; height: 500px;"></div>
    <script>
    $(document).ready(function() {
        // create the icon
        var LeafIcon = L.Icon.extend({
            options: {
                iconSize: [38, 95],
                shadowSize: [50, 64],
                iconAnchor: [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor: [-3, -76]
            }
        });
        var greenIcon = new LeafIcon({ iconUrl: 'leaf-green.png' }),
            redIcon = new LeafIcon({ iconUrl: 'leaf-red.png' }),
            orangeIcon = new LeafIcon({ iconUrl: 'leaf-orange.png' });

        // create the map
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // add locate control to the map
        map.locate({ setView: true, watch: true });
        L.control.locate({ setView: true }).addTo(map);

       // fetch data from locations.json
       fetch('data/locations.json')
    .then(res => res.json())
    .then(data => {
        data.locations.forEach(location => {
            var marker = new L.marker([location.latitude, location.longitude], {icon: greenIcon}).addTo(map);
            marker.bindPopup(location.name);
        });
    });
        });

</script>

</body>





<?php
$pageTitle = 'Form';
include("templates/base.php");
include("qrcodereader.js");

?>
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
</script>
<body>

<div id="container">
    <h1>QR Code Scanner</h1>

    <a id="btn-scan-qr">
        <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
    </a>

    <canvas hidden="" id="qr-canvas"></canvas>

    <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
    </div>
</div>

<script src="./src/qrCodeScanner.js"></script>

    <div class="container">
        <!-- DISPLAY PATIENT NUMBER DEPENDING ON QR Code -->
           
        <!-- GRUNDDATEN TABLE -->
          <div style="overflow-x:auto;"> 
            <table>
              <tr>
                <td>Name:</td>
                <td>
                    <form action="#" method="POST">
                        <input type="text" name="Name" placeholder="Nachname" value="{{Name if Name}}"/>
                    </form>
                </td>
              </tr>
              <tr>
                <td>Vorname:</td>
                <td>
                    <form action="#" method="POST">
                        <input type="text" name="Vorname" placeholder="Vorname" value="{{Vorname if Vorname}}"/>
                    </form>
                </td>
              </tr>
              <tr>
                <td>Geburtsdatum/-Alter:</td>
                <td>
                    <form action="#" method="POST">
                        <input type="text" name="Geburtsdatum" placeholder="Geburtdatum (dd.mm.jjjj) und Alter" value="{{DOB if DOB}}"/>
                    </form>
                </td>
              </tr>
              <tr>
                <td>Geschlecht:</td>
                <td>  
                    <form action="#" method="POST">              
                <div class="custom-control custom-radio">
                    <input type="radio" value="1" id="{{männlich}}" name="{{männlich}}" class="custom-control-input">
                    <label class="custom-control-label" for="{{geschlecht}}">Männlich</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" value="0" id="{{weiblich}}" name="{{weiblich}}" class="custom-control-input">
                    <label class="custom-control-label" for="{{geschlecht}}">Weiblich</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" value="0" id="{{divers}}" name="{{divers}}" class="custom-control-input">
                    <label class="custom-control-label" for="{{geschlecht}}">Divers</label>
                </div>
            </form>
                </td>
              </tr>
            <td>
              <tr>
                <td>Nationalität:</td>
                <td>
                    <form action="#" method="POST">
                        <input type="text" name="Nationalität" placeholder="Nationalität" value="{{Nationalität if Nationalität}}"/>
                    </form>
                </td>
              </tr>
              <tr>
                <td>Datum:</td>
                <td>
                    <form action="#" method="POST">
                        <input type="date" name="Datum" placeholder="Aktuelles Datum" value="{{Datum if Datum}}"/>
                    </form>
                </td>
              </tr>
            </table>
          </div>  
          <br>
                
        <!-- Sichtung TABLE -->
        <div style="overflow-x:auto;"> 
            <table>
                <tr>
                    <th></th>
                    <th>Uhrzeit/Name</th>
                    <th>Kategorie</th>
                </tr>    
                <tr>
                    <th>1. Sichtung</th>
                    <td>1. Sichtung</td>
                    <td>                
                        <div class="custom-control custom-radio">
                            <input type="radio" value="1" id="{{eins}}" name="{{eins}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">I.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{zwei}}" name="{{zwei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">II.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{drei}}" name="{{drei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">III.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{vier}}" name="{{vier}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">IV.</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th> 2. Sichtung</th>
                    <td>1. Sichtung</td>
                    <td>                
                        <div class="custom-control custom-radio">
                            <input type="radio" value="1" id="{{eins}}" name="{{eins}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">I.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{zwei}}" name="{{zwei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">II.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{drei}}" name="{{drei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">III.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{vier}}" name="{{vier}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">IV.</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th> 3. Sichtung</th>
                    <td>1. Sichtung</td>
                    <td>                
                        <div class="custom-control custom-radio">
                            <input type="radio" value="1" id="{{eins}}" name="{{eins}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">I.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{zwei}}" name="{{zwei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">II.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{drei}}" name="{{drei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">III.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{vier}}" name="{{vier}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">IV.</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th> 4. Sichtung</th>
                    <td>1. Sichtung</td>
                    <td>                
                        <div class="custom-control custom-radio">
                            <input type="radio" value="1" id="{{eins}}" name="{{eins}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">I.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{zwei}}" name="{{zwei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">II.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{drei}}" name="{{drei}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">III.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" value="0" id="{{vier}}" name="{{vier}}" class="custom-control-input">
                            <label class="custom-control-label" for="{{kategorie}}">IV.</label>
                        </div>
                    </td>
                </tr>
            </table>
        </div>  
        <br>

        <!-- TRANSPORT-->
        <form action="#" method="post">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="Transportmittel" class="form-label">Transportmittel:</label>
                  <input type="text" class="form-control" id="Transportmittel" name="Transportmittel" value="Transportmittel">
              </div>
              <div class="form-group col-md-3">
                <label for="Transportziel" class="form-label">Transportziel:</label>
                  <input type="text" class="form-control" id="Transportziel" name="Transportziel" value="Transportziel">
              </div>
              <div class="form-group col-md-6">
                <label for="transport" class="form-label">Transport:</label><br>
                  <input type="radio" id="transport1" name="transport" value="liegend"> liegend
                  <input type="radio" id="transport2" name="transport" value="sitzend"> sitzend
                  <input type="radio" id="transport3" name="transport" value="mit Notarzt"> mit Notarzt
                  <input type="radio" id="transport4" name="transport" value="isoliert"> isoliert
                  Priorität
                  <input type="radio" id="transport5" name="transport" value="Prioritäta"> A     
                  <input type="radio" id="transport5" name="transport" value="Prioritätb"> B            
                </div>
            </div>
        </form>
        <!-- INNENLIEGENDE -->       
        <form action="#" method="post">
            <div class="form-row">
              <div class="form-group col-md-4">




        </form>
        
        <!-- EDIT BUTTON -->      
        <form action="administration.php" method="get" name="Name">
            <input type="hidden" name="Insurance_ID" value="submit">
            <input type="submit" value="Submit" class="btn btn-outline-secondary float-right">
            <a href=""></a>
          

</body>
</html>
    



include("qrcodereader.js");
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
</script>
<body>

<div id="container">
    <h1>QR Code Scanner</h1>

    <a id="btn-scan-qr">
        <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
    </a>

    <canvas hidden="" id="qr-canvas"></canvas>

    <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
    </div>
</div>

<script src="./src/qrCodeScanner.js"></script>

//initializing
$date = "";
$firstname = "";
$lastname = "";
$birthdate = "";
$race = "";
$sex = "";
$sichtung1 = "";
$kategorie1 = "";
$sichtung2 = "";
$kategorie2 = "";
$sichtung3 = "";
$kategorie3 = "";
$sichtung4 = "";
$kategorie4 = "";
$transportm = "";
$transportz = "";
$transport = "";
$priorität = "";
$copy1 = "";
$copy2 = "";
$weiter1 = "";
$weiter2 = "";
$kurzdiagnose = "";
$verletzung = "";
$verbrennung = "";
$erkrankung = "";
$vergiftung = "";
$verstrahlung = "";
$psyche = "";
$bewusstseinob = "";
$bewusstseintext = "";
$atmungob = "";
$atmungtext = "";
$kresilaufob = "";
$kresilauftext = "";
$infusion = "";
$analgetika = "";
$antidote = "";
$sostigemedikamente = "";
$bemerkungen = "";



$stmt->bindValue(':date', $date);
            $stmt->bindValue(':firstname', $firstname);
            $stmt->bindValue(':lastname', $lastname);
            $stmt->bindValue(':birthdate', $birthdate);
            $stmt->bindValue(':race', $race);
            $stmt->bindValue(':sex', $sex);
            $stmt->bindValue(':sichtung1', $sichtung1);
            $stmt->bindValue(':kategorie1', $kategorie1);
            $stmt->bindValue(':sichtung2', $sichtung2);
            $stmt->bindValue(':kategorie2', $kategorie2);
            $stmt->bindValue(':sichtung3', $sichtung3);
            $stmt->bindValue(':kategorie3', $kategorie3);
            $stmt->bindValue(':sichtung4', $sichtung4);
            $stmt->bindValue(':kategorie4', $kategorie4);
            $stmt->bindValue(':transportm', $transportm);
            $stmt->bindValue(':transportz', $transportz);
            $stmt->bindValue(':transport', $transport);
            $stmt->bindValue(':priorität', $priorität);
            $stmt->bindValue(':copy1', $copy1);
            $stmt->bindValue(':copy2', $copy2);
            $stmt->bindValue(':weiter1', $weiter1);
            $stmt->bindValue(':weiter2', $weiter2);
            $stmt->bindValue(':kurzdiagnose', $kurzdiagnose);
            $stmt->bindValue(':verletzung', $verletzung);
            $stmt->bindValue(':verbrennung', $verbrennung);
            $stmt->bindValue(':erkrankung', $erkrankung);
            $stmt->bindValue(':verstrahlung', $verstrahlung);
            $stmt->bindValue(':psyche', $psyche);
            $stmt->bindValue(':bewusstseinob', $bewusstseinob);
            $stmt->bindValue(':bewusstseintext', $bewusstseintext);
            $stmt->bindValue(':atmungob', $atmungob);
            $stmt->bindValue(':atmungtext', $atmungtext);
            $stmt->bindValue(':kresilaufob', $kresilaufob);
            $stmt->bindValue(':kresilauftext', $kresilauftext);
            $stmt->bindValue(':infusion', $infusion);
            $stmt->bindValue(':analgetika', $analgetika);
            $stmt->bindValue(':antidote', $antidote);
            $stmt->bindValue(':sostigemedikamente', $sostigemedikamente);
            $stmt->bindValue(':bemerkungen', $bemerkungen);



                    <!-- TRANSPORT-->
        <div class="form-row">
          <div class="form-group col-md-5"> <h2> Transport- <br> information</h2><hr>
            
            <div class="form-row">
                  <label for="Transportmittel" class="form-label">Transportmittel:</label>
                  <input type="text" class="form-control" id="Transportmittel" name="Transportmittel" value="<?php echo $patient[0]['transportmittel']; ?>"><br><br>
            </div>

            <div class="form-row">
                <label for="Transportziel" class="form-label">Transportziel:</label>
                  <input type="text" class="form-control" id="Transportziel" name="Transportziel" value="<?php echo $patient[0]['transportziel']; ?>"><br><br>
            </div>

            <div class="form-row">
            <label for="transport" class="form-label">Transport:</label>
            <?php
                $transport = explode(',', $patient[0]['transport']);
                $transports = array('liegend', 'sitzend', 'mit Notarzt', 'isoliert');
                foreach($transports as $value) {
                $checked = in_array($value, $transport) ? "checked" : "";
                echo '<input type="checkbox"  id="transport" name="transport[]" value="' . $value . '" ' . $checked . '> ' . $value . '<br>';
                }
            ?>
            </div>
            <div class="form-row">
            <label for="Priorität" class="form-label">Priorität:</label>
            <?php
                $selectedPriorität = $patient[0]['transport'];
                $prioritäts = array('A', 'B');
                foreach($prioritäts as $value) {
                $checked = ($selectedPriorität == $value) ? "checked" : "";
                echo '<input type="radio"   id="Priorität" name="Priorität" value="' . $value . '" ' . $checked . '> ' . $value;
                }
            ?>
            </div>