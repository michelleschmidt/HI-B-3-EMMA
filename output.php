<?php
$pageTitle = 'Output';
include("templates/base.php");
include("data/phpoutput.php");
    // Array $patient ( [0] => Array ( [farbe] => CC0000 [name] => Doe [vorname] => John [kurzdiagnose] => Lunge kollabiert [datum] => [birthdate] => [nationalitaet] => deutsch [sex] => m [sichtung1] => [kategorie1] => [sichtung2] => [kategorie2] => [sichtung3] => [kategorie3] => [sichtung4] => [kategorie4] => [transportmittel] => [transportziel] => [transport] => [copy1] => [copy2] => [weiter1] => [weiter2] => [verletzung] => [verbrennung] => [vergiftung] => [verstrahlung] => [psyche] => [bewusstsein] => [atmung] => [kreislauf] => [infusion] => [analgetika] => [antidote] => [sonstmedikamente] => [bemerkungen] => ) )
?>

<body>
    <div class="container" style= 'color: #<?php echo $patient[0]['farbe']; ?>'>

        <!-- DISPLAY PATIENT NUMBER DEPENDING ON QR Code -->
        <h1 style= 'font-weight: bold; color: #<?php echo $patient[0]['farbe']; ?>'>QR Code: <?php echo $QRCode;?></h1>
         
        
        <!-- GRUNDDATEN TABLE -->
        <form method = "POST">
            <h2> Grundaten 
                <input type="submit" name ="Grunddaten_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
            </h2>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Name:</label><br>
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Nachname" value="<?php echo $patient[0]['name']; ?>"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Vorname:</label><br>
                        <input type="text" class="form-control"  name="Vorname" id="Vorname" placeholder="Vorname" value="<?php echo $patient[0]['vorname']; ?>"/>  
                </div>
                <div class="form-group col-md-4">   
                    <label for="grunddaten" class="form-label">Geburtsdatum/-Alter:</label><br>
                        <input type="text" class="form-control" name="Geburtsdatum" id="Geburtsdatum" placeholder="Geburtdatum (tt.mm.jjjj) und Alter" value="<?php echo $patient[0]['birthdate']; ?>" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="geschlecht" class="form-label">Geschlecht:</label><br>
                        <input type="radio" value="m" id="männlich" name="geschlecht" <?php echo ($patient[0]['sex'] == 'm') ? 'checked' : ''; ?>>Männlich                      
                        <input type="radio" value="f" id="weiblich" name="geschlecht" <?php echo ($patient[0]['sex'] == 'f') ? 'checked' : ''; ?>>Weiblich
                        <input type="radio" value="d" id="divers" name="geschlecht" <?php echo ($patient[0]['sex'] == 'd') ? 'checked' : ''; ?>>Divers        
                </div>                
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Nationalität:</label><br>
                        <input type="text" class="form-control" name="Nationalität" id="Nationalität" placeholder="Nationalität" value="<?php echo $patient[0]['nationalitaet']; ?>"/>
                </div> 
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Datum:</label><br>
                        <input type="text" class="form-control" name="Datum" placeholder="Aktuelles Datum" value="<?php echo ($patient[0]['datum']) ? $patient[0]['datum'] : date('d-m-Y H:i:s'); ?>"readonly/>
                </div>
            </div> 
        </form>     
                            
        <br><br><br>
                
        <!-- Sichtung TABLE -->
        <form method = "POST">
            <div> 
                <h2> Sichtung 
                    <input type="submit" name ="Sichtung_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
                </h2>
                <hr>
                <table>
                    <tr>
                        <th></th>
                        <th>Uhrzeit/Name</th>
                        <th>Kategorie</th>
                    </tr>    
                    <tr>
                        <th>1. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung1" name="sichtung1" value="<?php echo $patient[0]['sichtung1']; ?>"></td>
                            <td>                
                                <label class="form-label" for="kategorie1"></label>
                                    <input type="radio" value="1" id="1" name="kategorie1" <?php echo ($patient[0]['kategorie1'] == '1') ? 'checked' : ''; ?>>I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie1" <?php echo ($patient[0]['kategorie1'] == '2') ? 'checked' : ''; ?>>II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie1" <?php echo ($patient[0]['kategorie1'] == '3') ? 'checked' : ''; ?>>III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie1" <?php echo ($patient[0]['kategorie1'] == '4') ? 'checked' : ''; ?>>IV.   <Br>   
                            </td>
                    </tr>
                    <tr>
                        <th> 2. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung2" name="sichtung2" value="<?php echo $patient[0]['sichtung2']; ?>"></td>
                            <td>                
                                <label class="form-label" for="kategorie2"></label>
                                    <input type="radio" value="1" id="1" name="kategorie2" <?php echo ($patient[0]['kategorie2'] == '1') ? 'checked' : ''; ?>>I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie2" <?php echo ($patient[0]['kategorie2'] == '2') ? 'checked' : ''; ?>>II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie2" <?php echo ($patient[0]['kategorie2'] == '3') ? 'checked' : ''; ?>>III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie2" <?php echo ($patient[0]['kategorie2'] == '4') ? 'checked' : ''; ?>>IV.   <Br>
                            </td>
                    </tr>
                    <tr>
                        <th> 3. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung3" name="sichtung3" value="<?php echo $patient[0]['sichtung3']; ?>"></td>
                            <td>                
                                <label class="form-label" for="kategorie3"></label>
                                    <input type="radio" value="1" id="1" name="kategorie3" <?php echo ($patient[0]['kategorie3'] == '1') ? 'checked' : ''; ?>>I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie3" <?php echo ($patient[0]['kategorie3'] == '2') ? 'checked' : ''; ?>>II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie3" <?php echo ($patient[0]['kategorie3'] == '3') ? 'checked' : ''; ?>>III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie3" <?php echo ($patient[0]['kategorie3'] == '4') ? 'checked' : ''; ?>>IV.   <Br>
                            </td>
                    </tr>
                    <tr>
                        <th> 4. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung4" name="sichtung4" value="<?php echo $patient[0]['sichtung4']; ?>"></td>
                            <td>                
                                <label class="form-label" for="kategorie4"></label>
                                    <input type="radio" value="1" id="1" name="kategorie4" <?php echo ($patient[0]['kategorie4'] == '1') ? 'checked' : ''; ?>>I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie4" <?php echo ($patient[0]['kategorie4'] == '2') ? 'checked' : ''; ?>>II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie4" <?php echo ($patient[0]['kategorie4'] == '3') ? 'checked' : ''; ?>>III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie4" <?php echo ($patient[0]['kategorie4'] == '4') ? 'checked' : ''; ?>>IV.   <Br>
                            </td>
                    </tr>
                </table>
            </div>  
        </form>

        <br><br><br>

        <!-- TRANSPORT -->
        <div class="row">
            <div class="col-md-5">
                <form method = "POST" >
                        <div class="form-row">
                            <div> 
                                <h2> Transport- <br> information
                                    <input type="submit" name ="Transport_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
                                </h2>
                                <hr>
                                <div class="form-row">
                                    <label for="Transportmittel" class="form-label">Transportmittel:</label>
                                    <select class="form-control" id="Transportmittel" name="Transportmittel">
                                        <option value="empty">-</option>
                                        <option value="KTW" <?php echo ($patient[0]['transportmittel'] == 'KTW') ? 'selected' : ''; ?>>KTW</option>
                                        <option value="RTW" <?php echo ($patient[0]['transportmittel'] == 'RTW') ? 'selected' : ''; ?>>RTW</option>
                                        <option value="NAW" <?php echo ($patient[0]['transportmittel'] == 'NAW') ? 'selected' : ''; ?>>NAW</option>
                                        <option value="RTH" <?php echo ($patient[0]['transportmittel'] == 'RTH') ? 'selected' : ''; ?>>RTH</option>
                                    </select><br><br>
                                </div>

                                <div class="form-row">
                                    <label for="Transportziel" class="form-label">Transportziel:</label>
                                    <select class="form-control" id="Transportziel" name="Transportziel">
                                        <option value="empty">-</option>
                                        <option value="Pfarrkirchen Rottal-Inn Kliniken" <?php echo ($patient[0]['transportziel'] == 'Pfarrkirchen Rottal-Inn Kliniken') ? 'selected' : ''; ?>>Pfarrkirchen Rottal-Inn Kliniken</option>
                                        <option value="Eggenfelden Rottal-Inn Kliniken" <?php echo ($patient[0]['transportziel'] == 'Eggenfelden Rottal-Inn Kliniken') ? 'selected' : ''; ?>>Eggenfelden Rottal-Inn Kliniken</option>
                                        <option value="Klinik Dorfen" <?php echo ($patient[0]['transportziel'] == 'Klinik Dorfen') ? 'selected' : ''; ?>>Klinik Dorfen</option>
                                        <option value="Dingolfing DONAUISAR Klinikum" <?php echo ($patient[0]['transportziel'] == 'Dingolfing DONAUISAR Klinikum') ? 'selected' : ''; ?>>Dingolfing DONAUISAR Klinikum</option>
                                    </select><br><br>
                                </div>
                            
                                <div class="form-row">
                                    <label for="transport" class="form-label">Transport:</label>
                                    <input type="checkbox" value="sitzend" id="sitzend" name="transport[]" 
                                        <?php echo (in_array('sitzend', $patient[0]['transport'])) ? 'checked' : ''; ?>>sitzend      <Br>                
                                    <input type="checkbox" value="liegend" id="liegend" name="transport[]" 
                                        <?php echo (in_array('liegend', $patient[0]['transport'])) ? 'checked' : ''; ?>>liegend      <Br>
                                    <input type="checkbox" value="mit Notarzt" id="mit Notarzt" name="transport[]" 
                                        <?php echo (in_array('mit Notarzt', $patient[0]['transport'])) ? 'checked' : ''; ?>>mit Notarzt      <Br>
                                    <input type="checkbox" value="isoliert" id="isoliert" name="transport[]" 
                                        <?php echo (in_array('isoliert', $patient[0]['transport'])) ? 'checked' : ''; ?>>isoliert      <Br>    
                                </div>


                                <div class="form-row">
                                    <label for="Priorität" class="form-label">Priorität:</label>
                                                <input type="radio" value="A" id="A" name="Priorität" <?php echo ($patient[0]['prio'] == 'A') ? 'checked' : ''; ?>>A      <Br>                
                                                <input type="radio" value="B" id="B" name="Priorität" <?php echo ($patient[0]['prio'] == 'B') ? 'checked' : ''; ?>>B      <Br>
                                </div>

                            </div>
                        </div>    
                </form>
            </div>
            
             
            <div class="form-row col-md-2"></div> 
       
        <!-- INNENLIEGENDE --> 
            <div class="col-md-5">
                <form method = "POST" >
                    <div> 
                        <h2> Innenliegende <br> Suchdienstkarte 
                            <input type="submit" name ="Innen_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
                        </h2>
                        <hr>  

                        <div class="form-row">
                            <div >
                                <label for="copy1" class= "form-label"></label>
                                    <input type="checkbox" id="copy1" name="copy1" value="1" <?php echo ($patient[0]['copy1'] == '1') ? 'checked' : ''; ?>> 1. Ausfertigung
                                    <input type="checkbox" id="weiter1" name="weiter1" value="1" <?php echo ($patient[0]['weiter1'] == '1') ? 'checked' : ''; ?>> weitergeleitet <br> <br>
                                <label for="copy2" class= "form-label"></label>
                                    <input type="checkbox" id="copy2" name="copy2" value="2" <?php echo ($patient[0]['copy2'] == '2') ? 'checked' : ''; ?>> 2. Ausfertigung
                                    <input type="checkbox" id="weiter2" name="weiter2" value="2" <?php echo ($patient[0]['weiter2'] == '2') ? 'checked' : ''; ?>> weitergeleitet
                            </div>        
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <br><br><br>

        <!-- DIAGNOSE-->  
        <form method = "POST" enctype="multipart/form-data">
            <h2> Diagnose 
                <input type="submit" name ="Diagnose_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
            </h2>  
            <hr>   
            <div class="form-row">
               <div class="form-group col-md-12">
                    <label for="diagnose" class="form-label"> Kurzdiagnose:</label><br>
                        <input type="text" class="form-control" id="kurzdiagnose" name="kurzdiagnose" value="<?php echo $patient[0]['kurzdiagnose']; ?>"> <br>
                </div>   
            </div>   
            <div class="form-row">
               <div class="form-group col-md-7">
                    <label for="diagnose" class="form-label"> Verletzung:</label><br>
                        <input type="text" class="form-control" id="verletzung" name="verletzung" value="<?php echo $patient[0]['verletzung']; ?>"> <br>
                    <label for="diagnose" class="form-label"> Verbrennung:</label><br>
                        <input type="text" class="form-control" id="verbrennung" name="verbrennung" value="<?php echo $patient[0]['verbrennung']; ?>"> <br>
                    <label for="diagnose" class="form-label"> Erkrankung:</label><br>
                        <input type="text" class="form-control" id="erkrankung" name="erkrankung" value="<?php echo $patient[0]['erkrankung']; ?>"> <br>
                    <label for="diagnose" class="form-label"> Vergiftung:</label><br>
                        <input type="text" class="form-control" id="vergiftung" name="vergiftung" value="<?php echo $patient[0]['vergiftung']; ?>"> <br>
                    <label for="diagnose" class="form-label"> Verstrahlung:</label><br>
                        <input type="text" class="form-control" id="verstrahlung" name="verstrahlung" value="<?php echo $patient[0]['verstrahlung']; ?>"> <br>
                    <label for="diagnose" class="form-label"> Psyche:</label><br>
                        <input type="text" class="form-control" id="psyche" name="psyche" value="<?php echo $patient[0]['psyche']; ?>"> <br>
                </div>
                <div class="form-group col-md-5" style="position: relative;">
                    <canvas id="image" name = "image"></canvas>
                </div>
            </div>
        </form>
    
       

        <!-- Zustand/Uhrzeit -->  
        <div class="row">
            <div class="col-md-5">
                <form method = "POST">
                    <div class="form-row">
                        <div>
                            <h2> Zustand/Uhrzeit
                                <input type="submit" name ="Zustand_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
                            </h2> 
                            <hr>    
                            <label for="bewusstsein" class="form-label"> Bewusstsein: </label><br>
                                <input type="radio" value="oB" id="bewusstseinoB" name="bewusstsein" <?php echo ($patient[0]['bewusstsein'] == 'oB') ? 'checked' : ''; ?>>oB                     
                                <input type="radio" value="mB" id="bewusstseinmB" name="bewusstsein" <?php echo ($patient[0]['bewusstsein'] == 'mB') ? 'checked' : ''; ?>>↓
                                <input type="text" class="form-control" id="bewusstseintxt" name="bewusstseintxt" 
                                value="<?php echo ($patient[0]['bewusstseintxt']); ?>"> <br>
                            <label for="atmung" class="form-label"> Atmung: </label><br>
                                <input type="radio" value="oB" id="atmungoB" name="atmung" <?php echo ($patient[0]['atmung'] == 'oB') ? 'checked' : ''; ?>>oB                     
                                <input type="radio" value="mB" id="atmungmB" name="atmung" <?php echo ($patient[0]['atmung'] == 'mB') ? 'checked' : ''; ?>>↓
                                <input type="text" class="form-control" id="atmungtxt" name="atmungtxt" value="<?php echo ($patient[0]['atmungtxt']); ?>"> <br>
                            <label for="kreislauf" class="form-label"> Kreislauf: </label><br>
                                <input type="radio" value="oB" id="kreislaufoB" name="kreislauf" <?php echo ($patient[0]['kreislauf'] == 'oB') ? 'checked' : ''; ?>>oB                     
                                <input type="radio" value="mB" id="kreislaufmB" name="kreislauf" <?php echo ($patient[0]['kreislauf'] == 'mB') ? 'checked' : ''; ?>>↓
                                <input type="text" class="form-control" id="kreislauftxt" name="kreislauftxt" value="<?php echo ($patient[0]['kreislauftxt']); ?>"> <br>                       
                        </div>
                    </div>
                </form>        
            </div>
            
            <div class="form-row col-md-2"></div> 

        <!-- Erst-Therapie -->  
            <div class="col-md-5">
                <form method = "POST">        
                    <h2> Erst-Therapie
                        <input type="submit" name ="Therapie_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
                    </h2> 
                    <hr>
                    <label for="ersttherapie" class="form-label"> Infusion:</label><br>
                        <input type="text" class="form-control" id="infusion" name="infusion" value="<?php echo $patient[0]['infusion']; ?>"> <br>
                    <label for="ersttherapie" class="form-label"> Analgetika:</label><br>
                        <input type="text" class="form-control" id="analgetika" name="analgetika" value="<?php echo $patient[0]['analgetika']; ?>"> <br>
                    <label for="ersttherapie" class="form-label"> Antidote:</label><br>
                        <input type="text" class="form-control" id="antidote" name="antidote" value="<?php echo $patient[0]['antidote']; ?>"> <br>
                    <label for="ersttherapie" class="form-label"> Sonstige Medikamente:</label><br>
                        <input type="text" class="form-control" id="sostigemedikamente" name="sostigemedikamente" value="<?php echo $patient[0]['sonstmedikamente']; ?>"> <br>
                </div>
            </form>
        </div>  

        <br><br><br>

        <!-- Bemerkungen -->  
        <form method = "POST">
            <h2> Bemerkungen 
                <input type="submit" name ="Bemerkungen_submit" value="Änderungen speichern" class="btn btn-outline-secondary float-right">
            </h2> 
            <hr>  
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" class="resizedText" id="bemerkungen" name="bemerkungen" value="<?php echo $patient[0]['bemerkungen']; ?>"> <br>
            </div>
        </form>
    </div>
<body>
<?php

$db->close();

?>
<script>
 const canvas = new fabric.Canvas("image");
  fabric.Image.fromURL("data:image/jpg;base64,<?php echo $patient[0]['image']; ?>", function (img) {
    img.set({
      left: 0,
      top: 0,
      originX: 'left',
      originY: 'top'
    });
    canvas.add(img);
    canvas.setHeight(img.height);
    canvas.setWidth(img.width);
    canvas.renderAll();
  });
  canvas.isDrawingMode = true;
  canvas.freeDrawingBrush.color = 'red';

  document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();
  // Convert canvas to JPEG
  let data = canvas.toDataURL('image/jpeg');
  let imgContent = data.replace(/^data:image\/(png|jpeg);base64,/, "");

  var form = new FormData();
  form.append('image', imgContent);
  form.append('Diagnose_submit', true);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'phpoutput.php', true);
  xhr.send(form);
});
</script>