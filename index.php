<?php
$pageTitle = 'Form';
include("base.php");
$QRCode = $_GET["qr"];
$results = $db->query("SELECT * FROM qrpatients WHERE qr = '$QRCode'");
$row = $results->fetchArray();
if (!$row) {
    echo "Error: No results found for QR code $QRCode";
    exit;
}

$sichtung1 = "";
$sichtung2 = "";
$sichtung3 = "";
$sichtung4 = "";
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

?>

<body>
    <div class="container">
        <!-- DISPLAY PATIENT NUMBER DEPENDING ON QR Code -->
        <h1>QR Code: <?php echo $QRCode;?></h1>   
        <!-- GRUNDDATEN TABLE -->
          <form method="post">

            <h2> Grundaten </h2><hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Name:</label><br>
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Nachname" value=""/>
                </div>
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Vorname:</label><br>
                        <input type="text" class="form-control"  name="Vorname" id="Vorname" placeholder="Vorname" value=""/>  
                </div>
                <div class="form-group col-md-4">   
                    <label for="grunddaten" class="form-label">Geburtsdatum/-Alter:</label><br>
                        <input type="text" class="form-control" name="Geburtsdatum" id="Geburtsdatum" placeholder="Geburtdatum (tt.mm.jjjj) und Alter" value=""/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="geschlecht" class="form-label">Geschlecht:</label><br>
                            <input type="radio" value="Männlich" id="männlich" name="geschlecht" >Männlich                      
                            <input type="radio" value="Weiblich" id="weiblich" name="geschlecht" >Weiblich
                            <input type="radio" value="Divers" id="divers" name="geschlecht">Divers
                          
                     
                </div>
                
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Nationalität:</label><br>
                        <input type="text" class="form-control" name="Nationalität" id="Nationalität" placeholder="Nationalität" value=""/>
                </div> 
            <!--    <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Datum:</label><br>
                        <input type="date" class="form-control" name="Datum" placeholder="Aktuelles Datum" value=""/>
                </div> -->
            </div> 
               
                            
          <br><br><br>
                
        <!-- Sichtung TABLE -->
        <div> 
            <h2> Sichtung </h2><hr>
            <table>
                <tr>
                    <th></th>
                    <th>Uhrzeit/Name</th>
                    <th>Kategorie</th>
                </tr>    
                <tr>
                    <th>1. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung1" name="sichtung1" ></td>
                    <td>                
                        <label class="form-label" for="kategorie1"></label>
                            <input type="radio"  value="1" id="1eins" name="kategorie1"> I. <br>
                            <input type="radio"  value="2" id="1zwei" name="kategorie1" > II. <br>
                            <input type="radio"  value="3" id="1drei" name="kategorie1" > III. <br>
                            <input type="radio"  value="4" id="1vier" name="kategorie1" > IV.
                    </td>
                </tr>
                <tr>
                    <th> 2. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung2" name="sichtung2"></td>
                    <td>                
                        <label class="form-label" for="kategorie2"></label>
                            <input type="radio"  value="1" id="2eins" name="kategorie2"> I. <br>
                            <input type="radio"  value="2" id="2zwei" name="kategorie2" > II. <br>
                            <input type="radio"  value="3" id="2drei" name="kategorie2" > III. <br>
                            <input type="radio"  value="4" id="2vier" name="kategorie2" > IV.
                    </td>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th> 3. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung3" name="sichtung3"></td>
                    <td>                
                        <label class="form-label" for="kategorie3"></label>
                            <input type="radio"  value="1" id="3eins" name="kategorie3"> I. <br>
                            <input type="radio"  value="2" id="3zwei" name="kategorie3" > II. <br>
                            <input type="radio"  value="3" id="3drei" name="kategorie3" > III. <br>
                            <input type="radio"  value="4" id="3vier" name="kategorie3" > IV.
                    </td>
                </tr>
                <tr>
                    <th> 4. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung4" name="sichtung4"></td>
                    <td>                
                        <label class="form-label" for="kategorie4"></label>
                            <input type="radio"  value="1" id="4eins" name="kategorie4"> I. <br>
                            <input type="radio"  value="2" id="4zwei" name="kategorie4" > II. <br>
                            <input type="radio"  value="3" id="4drei" name="kategorie4" > III. <br>
                            <input type="radio"  value="4" id="4vier" name="kategorie4" > IV.
                    </td>
                </tr>
            </table>
        </div>  
        <br><br><br>

        <!-- TRANSPORT-->
        <div class="form-row">
          <div class="form-group col-md-5"> <h2> Transport- <br> information</h2><hr>
            
            <div class="form-row">
                  <label for="Transportmittel" class="form-label">Transportmittel:</label>
                  <input type="text" class="form-control" id="Transportmittel" name="Transportmittel" value="Transportmittel"><br><br>
            </div>

            <div class="form-row">
                <label for="Transportziel" class="form-label">Transportziel:</label>
                  <input type="text" class="form-control" id="Transportziel" name="Transportziel" value="Transportziel"><br><br>
            </div>

            <div class="form-row">
                <label for="transport" class="form-label">Transport:</label>
                <input type="checkbox"  id="transport1" name="transport[]" value="liegend"> liegend
                <input type="checkbox" id="transport2" name="transport[]" value="sitzend">sitzend
                <input type="checkbox"  id="transport3" name="transport[]" value="mit Notarzt"> Notarzt
                <input type="checkbox"  id="transport4" name="transport[]" value="isoliert"> isoliert
                    
            </div>

            <div class="form-row">
                Priorität:
                <input type="radio"   id="PrioritätA" name="transport[]" value="Priorität"> A 
                <input type="radio"   id="PrioritätB" name="transport[]" value="Priorität"> B            
            </div>
          </div>

          <div class="form-row col-md-2">
          </div>

        <!-- INNENLIEGENDE --> 
          <div class="form-group col-md-5"> <h2> Innenliegende Suchdienstkarte </h2><hr>  
    
            <div class="form-row">
              <div class="form-group col-md-4">
              <label for="copy1" class= "form-label"></label>
                    <input type="checkbox" id="copy1" name="copy1" value="1"> 1. Ausfertigung
                    <input type="checkbox" id="weiter1" name="copy1" value="1"> weitergeleitet <br> <br>
              <label for="copy2" class= "form-label"></label>
                    <input type="checkbox" id="copy2" name="copy2" value="2"> 2. Ausfertigung
                    <input type="checkbox" id="weiter2" name="copy2" value="2"> weitergeleitet
              </div>
            </div>
          </div>
        </div>

        <br><br><br>


        <!-- DIAGNOSE -->  
        <h2> Diagnose </h2>  <hr>   
            <div class="form-row">
               <div class="form-group col-md-12">
                <label for="diagnose" class="form-label"> Kurzdiagnose:</label><br>
                    <input type="text" class="form-control" id="kurzdiagnose" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Verletzung:</label><br>
                    <input type="text" class="form-control" id="verletzung" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Verbrennung:</label><br>
                    <input type="text" class="form-control" id="verbrennung" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Erkrankung:</label><br>
                    <input type="text" class="form-control" id="erkrankung" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Vergiftung:</label><br>
                    <input type="text" class="form-control" id="vergiftung" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Verstrahlung:</label><br>
                    <input type="text" class="form-control" id="verstrahlung" name="diagnose"> <br>
                <label for="diagnose" class="form-label"> Psyche:</label><br>
                    <input type="text" class="form-control" id="psyche" name="diagnose"> <br>
              </div>
            </div>
        <br><br><br>


        <!-- Zustand/Uhrzeit -->  
        <div class="form-row">
                <div class="form-group col-md-5"><h2> Zustand/Uhrzeit </h2> <hr>    
                  <label for="zustand" class="form-label"> Bewusstsein: </label><br>
                    <input type="checkbox"  id="bewusstseinob" name="zustand"> o.B <br>
                    <input type="checkbox"  id="bewusstseintext" name="zustand"> <input type="text" class="form-control" id="bewusstsein" name="zustand"> <br>
                  <label for="zustand" class="form-label"> Atmung: </label><br>
                    <input type="checkbox"  id="atmungob" name="zustand"> o.B <br>
                    <input type="checkbox"  id="atmungtext" name="zustand"> <input type="text" class="form-control" id="atmung" name="zustand"> <br>
                  <label for="zustand" class="form-label"> Kreislauf: </label><br>
                    <input type="checkbox"  id="kresilaufob" name="zustand"> o.B <br>
                    <input type="checkbox"  id="kreislauftext" name="zustand"> <input type="text" class="form-control" id="kreislauf" name="zustand"> <br>                             
                </div>

                <div class="form-row col-md-2">
                </div>


        <!-- Erst-Therapie -->  
        
            <div class="form-group col-md-5"><h2> Erst-Therapie </h2> <hr>
                <label for="ersttherapie" class="form-label"> Infusion:</label><br>
                    <input type="text" class="form-control" id="infusion" name="ersttherapie"> <br>
                <label for="ersttherapie" class="form-label"> Analgetika:</label><br>
                    <input type="text" class="form-control" id="analgetika" name="ersttherapie"> <br>
                <label for="ersttherapie" class="form-label"> Antidote:</label><br>
                    <input type="text" class="form-control" id="antidote" name="ersttherapie"> <br>
                <label for="ersttherapie" class="form-label"> Sonstige Medikamente:</label><br>
                    <input type="text" class="form-control" id="sostigemedikamente" name="ersttherapie"> <br>
            </div>
        </div>
        <br><br><br>

        <!-- Bemerkungen -->  
        <h2> Bemerkungen </h2> <hr>
        <div class="form-row">
               <div class="form-group col-md-12">
               <input type="text" class="resizedText" id="bemerkungen" name="bemerkungen"> <br>
        </div>
        
        <!-- EDIT BUTTON  -->  
  
            <input type="hidden" name="qrcode" value="submit">
            <input type="submit" value="Submit" class="btn btn-outline-secondary float-right">
    </form>
</div>


<?php

if (isset($QRCode)) {
    $date = date('d-m-y h:i:s');
    $firstname = trim($_POST['Name']);
    $lastname = trim($_POST['Vorname']);
    $birthdate = trim($_POST['Geburtsdatum']);
    $race = trim($_POST['Nationalität']);
    $sex = trim($_POST['geschlecht']);

    $sichtung1 = trim($_POST['sichtung1']);
    $kategorie1 = trim($_POST['kategorie1']);
    $sichtung2 = trim($_POST['sichtung2']);
    $kategorie2 = trim($_POST['kategorie2']);
    $sichtung3 = trim($_POST['sichtung3']);
    $kategorie3 = trim($_POST['kategorie3']);
    $sichtung4 = trim($_POST['sichtung4']);
    $kategorie4 = trim($_POST['kategorie4']);

    $transportm = trim($_POST['Transportmittel']);
    $transportz = trim($_POST['Transportziel']);

    $transport = trim($_POST['transport']);
    $priorität = trim($_POST['Priorität']);
    $copy1 = trim($_POST['copy1']);
    $copy2 = trim($_POST['copy2']);
    $weiter1 = trim($_POST['weiter1']);
    $weiter2 = trim($_POST['weiter2']);
    $kurzdiagnose = trim($_POST['kurzdiagnose']);
    $verletzung = trim($_POST['verletzung']);
    $verbrennung = trim($_POST['verbrennung']);
    $erkrankung = trim($_POST['erkrankung']);
    $vergiftung = trim($_POST['vergiftung']);
    $verstrahlung = trim($_POST['verstrahlung']);
    $psyche = trim($_POST['psyche']);
    $bewusstseinob = trim($_POST['bewusstseinob']);
    $bewusstseintext = trim($_POST['bewusstseintext']);
    $atmungob = trim($_POST['atmungob']);
    $atmungtext = trim($_POST['atmungtext']);
    $kresilaufob = trim($_POST['kresilaufob']);
    $kresilauftext = trim($_POST['kresilauftext']);
    $infusion = trim($_POST['infusion']);
    $analgetika = trim($_POST['analgetika']);
    $antidote = trim($_POST['antidote']);
    $sostigemedikamente = trim($_POST['sostigemedikamente']);
    $bemerkungen = trim($_POST['bemerkungen']);
    
    //defining variable as error handling

    $update = $db->query("UPDATE qrpatients SET datum =  '$date', vorname=  '$firstname', name=  '$lastname', dob=  '$birthdate', nationalitaet =  '$race', 
        sex=  '$sex' , sichtung1=  '$sichtung1' , sichtung2=  '$sichtung2' , sichtung3=  '$sichtung3' , sichtung4=  '$sichtung4' , 
        kategorie1=  '$kategorie1' , kategorie2=  '$kategorie2' , kategorie3=  '$kategorie3' , kategorie4=  '$kategorie4' , 
        transportmittel=  '$transportm' , transportziel=  '$transportz' , transport=  '$transport', ausfertigung1=  '$copy1',  
        ausfertigung2=  '$copy2' , weitergeleitet1=  '$weiter1' , weitergeleitet2=  '$weiter2' , kurzdiagnose=  '$kurzdiagnose' , verletzung=  '$verletzung',  
        verbrennung=  '$verbrennung' , erkrankung=  '$erkrankung' , vergiftunng=  '$vergiftung' , verstrahlung=  '$verstrahlung' , psyche=  '$psyche', 
        bewusstsein=  '$bewusstsein', atmung=  '$atmung', kreislauf=  '$kreislauf', infusion=  '$infusion' , analgetika=  '$analgetika' , antidote=  '$antidote', 
        sonstmedikamente=  '$sonstigemedikamente' , bemerkungen=  '$bemerkungen' WHERE qr = '$QRCode'");
    

            
    $db->exec($update);
        if (!$update) {
                die(mysqli_error($db));
              } else {
                echo "Record Created Successfully!";   
            }}
      
$db -> close();
    
  ?>

</body>
</html>
