<?php
$pageTitle = 'Form';
include("base.php");
//include("data/data.php");
include("data/phpform.php");
    // Array $patient ( [0] => Array ( [farbe] => CC0000 [name] => Doe [vorname] => John [kurzdiagnose] => Lunge kollabiert [datum] => [birthdate] => [nationalitaet] => deutsch [sex] => m [sichtung1] => [kategorie1] => [sichtung2] => [kategorie2] => [sichtung3] => [kategorie3] => [sichtung4] => [kategorie4] => [transportmittel] => [transportziel] => [transport] => [copy1] => [copy2] => [weiter1] => [weiter2] => [verletzung] => [verbrennung] => [vergiftung] => [verstrahlung] => [psyche] => [bewusstsein] => [atmung] => [kreislauf] => [infusion] => [analgetika] => [antidote] => [sonstmedikamente] => [bemerkungen] => ) )
?>

<body>
    <div class="container" style= 'color: #<?php echo $patient[0]['farbe']; ?>'>

        <!-- DISPLAY PATIENT NUMBER DEPENDING ON QR Code -->
        <h1 style= 'color: #<?php echo $patient[0]['farbe']; ?>'>QR Code: <?php echo $QRCode;?></h1>
        <form method = "POST">    
        <!-- GRUNDDATEN TABLE -->
            <h2> Grundaten </h2><hr>
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
                        <input type="text" class="form-control" name="Geburtsdatum" id="Geburtsdatum" placeholder="Geburtdatum (tt.mm.jjjj) und Alter" value="<?php echo $patient[0]['birthdate']; ?>"/>
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
                    <input type="text" class="form-control" name="Datum" placeholder="Aktuelles Datum" value="<?php echo ($patient[0]['datum']) ? $patient[0]['datum'] : date('d-m-Y H:i:s'); ?>"/>
                </div>
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
                <td><input type="text" class="form-control" id="sichtung1" name="sichtung1" value="<?php echo $patient[0]['sichtung1']; ?>"></td>
                <td>                
                    <label class="form-label" for="kategorie1"></label>
                    <?php
                        $selectedCategory = $patient[0]['kategorie1'];
                        $categories = array(1 => "I.", 2 => "II.", 3 => "III.", 4 => "IV.");
                        foreach($categories as $value => $label) {
                            $checked = ($selectedCategory == $value) ? "checked" : "";
                            echo '<input type="radio" value="' . $value . '" id="kategorie1" name="kategorie1" ' . $checked . '> ' . $label . '<br>';
                        }
                    ?>
                </td>
                </tr>
                <tr>
                    <th> 2. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung2" name="sichtung2" value="<?php echo $patient[0]['sichtung2']; ?>"></td>
                <td>                
                    <label class="form-label" for="kategorie2"></label>
                    <?php
                        $selectedCategory = $patient[0]['kategorie2'];
                        $categories = array(1 => "I.", 2 => "II.", 3 => "III.", 4 => "IV.");
                        foreach($categories as $value => $label) {
                            $checked = ($selectedCategory == $value) ? "checked" : "";
                            echo '<input type="radio" value="' . $value . '" id="kategorie2" name="kategorie2" ' . $checked . '> ' . $label . '<br>';
                        }
                    ?>
                </td>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th> 3. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung3" name="sichtung3" value="<?php echo $patient[0]['sichtung3']; ?>"></td>
                <td>                
                    <label class="form-label" for="kategorie3"></label>
                    <?php
                        $selectedCategory = $patient[0]['kategorie3'];
                        $categories = array(1 => "I.", 2 => "II.", 3 => "III.", 4 => "IV.");
                        foreach($categories as $value => $label) {
                            $checked = ($selectedCategory == $value) ? "checked" : "";
                            echo '<input type="radio" value="' . $value . '" id="kategorie3" name="kategorie3" ' . $checked . '> ' . $label . '<br>';
                        }
                    ?>
                </td>
                </tr>
                <tr>
                    <th> 4. Sichtung</th>
                    <td><input type="text" class="form-control" id="sichtung4" name="sichtung4" value="<?php echo $patient[0]['sichtung4']; ?>"></td>
                <td>                
                    <label class="form-label" for="kategorie4"></label>
                    <?php
                        $selectedCategory = $patient[0]['kategorie4'];
                        $categories = array(1 => "I.", 2 => "II.", 3 => "III.", 4 => "IV.");
                        foreach($categories as $value => $label) {
                            $checked = ($selectedCategory == $value) ? "checked" : "";
                            echo '<input type="radio" value="' . $value . '" id="kategorie4" name="kategorie4" ' . $checked . '> ' . $label . '<br>';
                        }
                    ?>
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
                  <select class="form-control" id="Transportmittel" name="Transportmittel">
                    <option value="empty">-</option>
                    <option value="KTW" <?php echo ($patient[0]['transportziel'] == 'KTW') ? 'selected' : ''; ?>>KTW</option>
                    <option value="RTW" <?php echo ($patient[0]['transportziel'] == 'RTW') ? 'selected' : ''; ?>>RTW</option>
                    <option value="NAW" <?php echo ($patient[0]['transportziel'] == 'NAW') ? 'selected' : ''; ?>>NAW</option>
                    <option value="RTH" <?php echo ($patient[0]['transportziel'] == 'RTH') ? 'selected' : ''; ?>>RTH</option>
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
                <?php
                $transport = explode(',', $patient[0]['transport']);
                $transports = array('liegend', 'sitzend', 'mit Notarzt', 'isoliert');
                foreach($transports as $value) {
                $checked = in_array($value, $transport) ? "checked" : "";
                echo '<input type="checkbox" id="transport" name="transport" value="' . $value . '" ' . $checked . '> ' . $value . '<br>';
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
                echo '<input type="radio" id="transport" name="transport" value="' . $value . '" ' . $checked . '> ' . $value;
                }
            ?>           
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
                    <input type="text" class="form-control" id="kurzdiagnose" name="diagnose" value="<?php echo $patient[0]['kurzdiagnose']; ?>"> <br>
                <label for="diagnose" class="form-label"> Verletzung:</label><br>
                    <input type="text" class="form-control" id="verletzung" name="diagnose" value="<?php echo $patient[0]['verletzung']; ?>"> <br>
                <label for="diagnose" class="form-label"> Verbrennung:</label><br>
                    <input type="text" class="form-control" id="verbrennung" name="diagnose" value="<?php echo $patient[0]['verbrennung']; ?>"> <br>
                <label for="diagnose" class="form-label"> Erkrankung:</label><br>
                    <input type="text" class="form-control" id="erkrankung" name="diagnose" value="<?php echo $patient[0]['erkrankung']; ?>"> <br>
                <label for="diagnose" class="form-label"> Vergiftung:</label><br>
                    <input type="text" class="form-control" id="vergiftung" name="diagnose" value="<?php echo $patient[0]['vergiftung']; ?>"> <br>
                <label for="diagnose" class="form-label"> Verstrahlung:</label><br>
                    <input type="text" class="form-control" id="verstrahlung" name="diagnose" value="<?php echo $patient[0]['verstrahlung']; ?>"> <br>
                <label for="diagnose" class="form-label"> Psyche:</label><br>
                    <input type="text" class="form-control" id="psyche" name="diagnose" value="<?php echo $patient[0]['psyche']; ?>"> <br>
              </div>
            </div>
        <br><br><br>


        <!-- Zustand/Uhrzeit -->  
        <div class="form-row">
                <div class="form-group col-md-5"><h2> Zustand/Uhrzeit </h2> <hr>    
                    <label for="bewusstsein" class="form-label"> Bewusstsein: </label><br>
                        <input type="radio" value="oB" id="oB" name="bewusstsein" <?php echo ($patient[0]['bewusstsein'] == 'oB') ? 'checked' : ''; ?>>oB                     
                        <input type="radio" value="mB" id="mB" name="bewusstsein" <?php echo ($patient[0]['bewusstsein'] == 'mB') ? 'checked' : ''; ?>>↓
                        <input type="text" class="form-control" id="bewusstsein" name="bewusstsein" 
                        value="<?php echo ($patient[0]['bewusstsein']); ?>"> <br>
                    <label for="atmung" class="form-label"> Atmung: </label><br>
                        <input type="radio" value="oB" id="oB" name="atmung" <?php echo ($patient[0]['atmung'] == 'oB') ? 'checked' : ''; ?>>oB                     
                        <input type="radio" value="mB" id="mB" name="atmung" <?php echo ($patient[0]['atmung'] == 'mB') ? 'checked' : ''; ?>>↓
                        <input type="text" class="form-control" id="atmung" name="atmung" 
                        value="<?php echo ($patient[0]['atmung']); ?>"> <br>
                    <label for="kreislauf" class="form-label"> Kreislauf: </label><br>
                        <input type="radio" value="oB" id="oB" name="kreislauf" <?php echo ($patient[0]['kreislauf'] == 'oB') ? 'checked' : ''; ?>>oB                     
                        <input type="radio" value="mB" id="mB" name="kreislauf" <?php echo ($patient[0]['kreislauf'] == 'mB') ? 'checked' : ''; ?>>↓
                        <input type="text" class="form-control" id="kreislauf" name="kreislauf" 
                        value="<?php echo ($patient[0]['kreislauf']); ?>"> <br>                       
                </div>

                <div class="form-row col-md-2">
                </div>


        <!-- Erst-Therapie -->  
        
            <div class="form-group col-md-5"><h2> Erst-Therapie </h2> <hr>
                <label for="ersttherapie" class="form-label"> Infusion:</label><br>
                    <input type="text" class="form-control" id="infusion" name="ersttherapie" value="<?php echo $patient[0]['infusion']; ?>"> <br>
                <label for="ersttherapie" class="form-label"> Analgetika:</label><br>
                    <input type="text" class="form-control" id="analgetika" name="ersttherapie" value="<?php echo $patient[0]['analgetika']; ?>"> <br>
                <label for="ersttherapie" class="form-label"> Antidote:</label><br>
                    <input type="text" class="form-control" id="antidote" name="ersttherapie" value="<?php echo $patient[0]['antidote']; ?>"> <br>
                <label for="ersttherapie" class="form-label"> Sonstige Medikamente:</label><br>
                    <input type="text" class="form-control" id="sostigemedikamente" name="ersttherapie" value="<?php echo $patient[0]['sonstmedikamente']; ?>"> <br>
            </div>
        </div>
        <br><br><br>

        <!-- Bemerkungen -->  
        <h2> Bemerkungen </h2> <hr>
        <div class="form-row">
               <div class="form-group col-md-12">
               <input type="text" class="resizedText" id="bemerkungen" name="bemerkungen" value="<?php echo $patient[0]['bemerkungen']; ?>"> <br>
        </div>
        
        <!-- EDIT BUTTON  -->  
        <input type="hidden" name="submit" value="submit">
        <input type="submit" value="Submit" class="btn btn-outline-secondary float-right" onclick="refreshPage()">
</form>
</div>

<script type="text/javascript">
   function refreshPage() {
      location.reload();
   }
</script>