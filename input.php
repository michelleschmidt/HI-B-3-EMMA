<?php
$pageTitle = 'Input';
include("templates/base.php");
include("data/phpinput.php")
?>

<body>
    <div class="container">

        <h1>QR Code: <?php echo $QRCode;?></h1>
         
        
        <!-- GRUNDDATEN TABLE -->
        <form method = "POST" enctype="multipart/form-data">
            <h2> Grundaten</h2>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Name:</label><br>
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Nachname"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Vorname:</label><br>
                        <input type="text" class="form-control"  name="Vorname" id="Vorname" placeholder="Vorname"/>  
                </div>
                <div class="form-group col-md-4">   
                    <label for="grunddaten" class="form-label">Geburtsdatum/-Alter:</label><br>
                        <input type="text" class="form-control" name="Geburtsdatum" id="Geburtsdatum" placeholder="Geburtdatum (tt.mm.jjjj) und Alter"/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="geschlecht" class="form-label">Geschlecht:</label><br>
                        <input type="radio" value="m" id="männlich" name="geschlecht">Männlich                      
                        <input type="radio" value="f" id="weiblich" name="geschlecht">Weiblich
                        <input type="radio" value="d" id="divers" name="geschlecht">Divers        
                </div>                
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Nationalität:</label><br>
                        <input type="text" class="form-control" name="Nationalität" id="Nationalität" placeholder="Nationalität"/>
                </div> 
                <div class="form-group col-md-4">
                    <label for="grunddaten" class="form-label">Datum:</label><br>
                        <input type="text" class="form-control" name="Datum" placeholder="Aktuelles Datum" value="<?php echo date('d-m-Y H:i:s'); ?>"readonly/>
                </div>
            </div> 

            <br>
                
        <!-- Sichtung TABLE -->
            <div> 
                <h2> Sichtung </h2>
                <hr>
                <table>
                    <tr>
                        <th></th>
                        <th>Uhrzeit/Name</th>
                        <th>Kategorie</th>
                    </tr>    
                    <tr>
                        <th>1. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung1" name="sichtung1"></td>
                            <td>                
                                <label class="form-label" for="kategorie1"></label>
                                    <input type="radio" value="1" id="1" name="kategorie1"  >I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie1"  >II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie1"  >III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie1" >IV.   <Br>   
                            </td>
                    </tr>
                    <tr>
                        <th> 2. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung2" name="sichtung2"></td>
                            <td>                
                                <label class="form-label" for="kategorie2"></label>
                                    <input type="radio" value="1" id="1" name="kategorie2" >I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie2" >II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie2" >III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie2" >IV.   <Br>
                            </td>
                    </tr>
                    <tr>
                        <th> 3. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung3" name="sichtung3" ></td>
                            <td>                
                                <label class="form-label" for="kategorie3"></label>
                                    <input type="radio" value="1" id="1" name="kategorie3">I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie3">II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie3">III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie3">IV.   <Br>
                            </td>
                    </tr>
                    <tr>
                        <th> 4. Sichtung</th>
                            <td><input type="text" class="form-control" id="sichtung4" name="sichtung4" ></td>
                            <td>                
                                <label class="form-label" for="kategorie4"></label>
                                    <input type="radio" value="1" id="1" name="kategorie4">I.      <Br>                
                                    <input type="radio" value="2" id="2" name="kategorie4">II.      <Br>
                                    <input type="radio" value="3" id="3" name="kategorie4">III.  <Br>
                                    <input type="radio" value="4" id="4" name="kategorie4">IV.   <Br>
                            </td>
                    </tr>
                </table>
            </div>  

        <br>

        <!-- TRANSPORT -->
        <div class="row">
            <div class="col-md-5">
                        <div class="form-row">
                            <div> 
                                <h2> Transportinformation </h2>
                                <hr>
                                <div class="form-row">
                                    <label for="Transportmittel" class="form-label">Transportmittel:</label>
                                    <select class="form-control" id="Transportmittel" name="Transportmittel">
                                        <option value="empty">-</option>
                                        <option value="KTW">KTW</option>
                                        <option value="RTW">RTW</option>
                                        <option value="NAW">NAW</option>
                                        <option value="RTH">RTH</option>
                                    </select><br><br>
                                </div>

                                <div class="form-row">
                                    <label for="Transportziel" class="form-label">Transportziel:</label>
                                    <select class="form-control" id="Transportziel" name="Transportziel">
                                        <option value="empty">-</option>
                                        <option value="Pfarrkirchen Rottal-Inn Kliniken">Pfarrkirchen Rottal-Inn Kliniken</option>
                                        <option value="Eggenfelden Rottal-Inn Kliniken" >Eggenfelden Rottal-Inn Kliniken</option>
                                        <option value="Klinik Dorfen" >>Klinik Dorfen</option>
                                        <option value="Dingolfing DONAUISAR Klinikum" >Dingolfing DONAUISAR Klinikum</option>
                                    </select><br><br>
                                </div>
                            
                                <div class="form-row">
                                    <label for="transport" class="form-label">Transport:</label>
                                    <input type="checkbox" value="sitzend" id="sitzend" name="transport[]">sitzend      <Br>                
                                    <input type="checkbox" value="liegend" id="liegend" name="transport[]" >liegend      <Br>
                                    <input type="checkbox" value="mit Notarzt" id="mit Notarzt" name="transport[]">mit Notarzt      <Br>
                                    <input type="checkbox" value="isoliert" id="isoliert" name="transport[]" >isoliert      <Br>    
                                </div>


                                <div class="form-row">
                                    <label for="Priorität" class="form-label">Priorität:</label>
                                                <input type="radio" value="A" id="A" name="Priorität">A      <Br>                
                                                <input type="radio" value="B" id="B" name="Priorität">B      <Br>
                                </div>

                            </div>
                        </div>    
            </div>
            
             
            <div class="form-row col-md-2"></div> 
       
        <!-- INNENLIEGENDE --> 
            <div class="col-md-5">
                    <div> 
                        <h2> Innenliegende Suchdienstkarte</h2>
                        <hr>  

                        <div class="form-row">
                            <div >
                                <label for="copy1" class= "form-label"></label>
                                    <input type="checkbox" id="copy1" name="copy1" value="1" > 1. Ausfertigung
                                    <input type="checkbox" id="weiter1" name="weiter1" value="1" > weitergeleitet <br> <br>
                                <label for="copy2" class= "form-label"></label>
                                    <input type="checkbox" id="copy2" name="copy2" value="2" > 2. Ausfertigung
                                    <input type="checkbox" id="weiter2" name="weiter2" value="2" > weitergeleitet
                            </div>        
                        </div>
                    </div>
            </div>
        </div>

        <br>

        <!-- DIAGNOSE IMAGE NOT WORKING-->  
            <h2> Diagnose</h2>  
            <hr>   
            <div class="form-row">
               <div class="form-group col-md-12">
                    <label for="diagnose" class="form-label"> Kurzdiagnose:</label><br>
                        <input type="text" class="form-control" id="kurzdiagnose" name="kurzdiagnose"> <br>
                </div>   
            </div>   
            <div class="form-row">
               <div class="form-group col-md-7">
                    <label for="diagnose" class="form-label"> Verletzung:</label><br>
                        <input type="text" class="form-control" id="verletzung" name="verletzung" > <br>
                    <label for="diagnose" class="form-label"> Verbrennung:</label><br>
                        <input type="text" class="form-control" id="verbrennung" name="verbrennung" > <br>
                    <label for="diagnose" class="form-label"> Erkrankung:</label><br>
                        <input type="text" class="form-control" id="erkrankung" name="erkrankung"> <br>
                    <label for="diagnose" class="form-label"> Vergiftung:</label><br>
                        <input type="text" class="form-control" id="vergiftung" name="vergiftung" > <br>
                    <label for="diagnose" class="form-label"> Verstrahlung:</label><br>
                        <input type="text" class="form-control" id="verstrahlung" name="verstrahlung"> <br>
                    <label for="diagnose" class="form-label"> Psyche:</label><br>
                        <input type="text" class="form-control" id="psyche" name="psyche" > <br>
                </div>
                <div class="form-group col-md-5" style="position: relative;">
                    <canvas id="image" name = "image"></canvas>
                </div>
            </div>
    
       

        <!-- Zustand/Uhrzeit -->  
        <div class="row">
            <div class="col-md-5">
                    <div class="form-row">
                        <div>
                            <h2> Zustand/Uhrzeit</h2> 
                            <hr>    
                            <label for="bewusstsein" class="form-label"> Bewusstsein: </label><br>
                                <input type="radio" value="oB" id="bewusstseinoB" name="bewusstsein" >oB                     
                                <input type="radio" value="mB" id="bewusstseinmB" name="bewusstsein">↓
                                <input type="text" class="form-control" id="bewusstseintxt" name="bewusstseintxt">  <br>
                            <label for="atmung" class="form-label"> Atmung: </label><br>
                                <input type="radio" value="oB" id="atmungoB" name="atmung">oB                     
                                <input type="radio" value="mB" id="atmungmB" name="atmung">↓
                                <input type="text" class="form-control" id="atmungtxt" name="atmungtxt" > <br>
                            <label for="kreislauf" class="form-label"> Kreislauf: </label><br>
                                <input type="radio" value="oB" id="kreislaufoB" name="kreislauf" >oB                     
                                <input type="radio" value="mB" id="kreislaufmB" name="kreislauf" >↓
                                <input type="text" class="form-control" id="kreislauftxt" name="kreislauftxt" > <br>                       
                        </div>
                    </div>     
            </div>
            
            <div class="form-row col-md-2"></div> 

        <!-- Erst-Therapie -->  
            <div class="col-md-5">       
                    <h2> Erst-Therapie</h2> 
                    <hr>
                    <label for="ersttherapie" class="form-label"> Infusion:</label><br>
                        <input type="text" class="form-control" id="infusion" name="infusion" > <br>
                    <label for="ersttherapie" class="form-label"> Analgetika:</label><br>
                        <input type="text" class="form-control" id="analgetika" name="analgetika"> <br>
                    <label for="ersttherapie" class="form-label"> Antidote:</label><br>
                        <input type="text" class="form-control" id="antidote" name="antidote"> <br>
                    <label for="ersttherapie" class="form-label"> Sonstige Medikamente:</label><br>
                        <input type="text" class="form-control" id="sostigemedikamente" name="sostigemedikamente"> <br>
                </div>
        </div>  

        <!-- Bemerkungen -->  
            <h2> Bemerkungen </h2> 
            <hr>  
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" class="resizedText" id="bemerkungen" name="bemerkungen"> <br>
            </div>
<!-- Nächste Felder nur, weil kein Algorythmus oder echte QR Scanner mit GPS vorhanden -->
            <!-- Priorität -->
            <div class="row">
                <div class="col-md-5">
                        <div class="form-row">
                            <div> 
                                <h2> Priorität </h2>
                                <hr>
                                <div class="form-row">
                                    <label for="farbe" class="form-label">Farbe:</label>
                                    <select class="form-control" id="Transportmittel" name="Transportmittel">
                                        <option value="CC0000">rot</option>
                                        <option value="0000CC">blau</option>
                                        <option value="CCCC00">gelb</option>
                                        <option value="000000">schwarz</option>
                                        <option value="009900">grün</option>
                                    </select><br><br>
                                </div>
                             </div>
                        </div>    
            </div>
            
             
            <div class="form-row col-md-2"></div> 
       
        <!-- Koordinaten --> 
            <div class="col-md-5">
                    <div> 
                        <h2> Koordinaten</h2>
                        <hr>  

                        <div class="form-row">
                            <div >
                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Längengrad mit Punkt">  <br>
                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Breitengrad mit Punkt">  <br>
                            </div>        
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <input type="submit" name ="submit" value="Patient speichern" class="btn btn-outline-secondary float-öeft">
</form>
<body>

<?php

$db->close();

?>

<script>
  const canvas = new fabric.Canvas("image");
  fabric.Image.fromURL("data/kurzdiagnose.jpg", function (img) {
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
</script>