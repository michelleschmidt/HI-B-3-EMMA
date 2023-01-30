<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$QRCode = $_GET["qr"];
$results = $db->query("SELECT * FROM qrpatients WHERE qr = '$QRCode'");
    while ($row = $results->fetchArray()) {
        $patient[] = array(
        'farbe' => $row['farbe'],
        'name' => $row['name'],
        'vorname' => $row['vorname'],
        'kurzdiagnose' => $row['kurzdiagnose'],
        'datum' => $row['datum'],
        'birthdate' => $row['dob'],
        'nationalitaet' => $row['nationalitaet'],
        'sex' => $row['sex'],
        'sichtung1' => $row['sichtung1'],
        'kategorie1' => $row['kategorie1'],
        'sichtung2' => $row['sichtung2'],
        'kategorie2' => $row['kategorie2'],
        'sichtung3' => $row['sichtung3'],
        'kategorie3' => $row['kategorie3'],
        'sichtung4' => $row['sichtung4'],
        'kategorie4' => $row['kategorie4'],
        'transportmittel' => $row['transportmittel'],
        'transportziel' => $row['transportziel'],
        'transport' => $row['transport'],
        'copy1' => $row['ausfertigung1'],
        'copy2' => $row['ausfertigung2'],
        'weiter1' => $row['weitergeleitet1'],
        'weiter2' => $row['weitergeleitet2'],
        'verletzung' => $row['verletzung'],
        'verbrennung' => $row['verbrennung'],
        'vergiftung' => $row['vergiftunng'],
        'erkrankung' => $row['erkrankung'],
        'verstrahlung' => $row['verstrahlung'],
        'psyche' => $row['psyche'],
        'bewusstsein' => $row['bewusstsein'],
        'atmung' => $row['atmung'],
        'kreislauf' => $row['kreislauf'],
        'infusion' => $row['infusion'],
        'analgetika' => $row['analgetika'],
        'antidote' => $row['antidote'],
        'sonstmedikamente' => $row['sonstmedikamente'],
        'bemerkungen' => $row['bemerkungen']
        );
    };

        $date = 'datum' or "";
        $firstname = 'name' or "";
        $lastname = 'vorname'  or "";
        $birthdate =  'birthdate' or "";
        $race =  'nationalitaet' or "";
        $sex = 'sex' or "";
        $sichtung1 =  'sichtung1'or "";
        $kategorie1 =  'kategorie1'or "";
        $sichtung2 =  'sichtung2' or "";
        $kategorie2 =  'kategorie2' or "";
        $sichtung3 =  'sichtung3' or "";
        $kategorie3 =  'kategorie3' or "";
        $sichtung4 =  'sichtung4' or "";
        $kategorie4 =  'kategorie4' or "";
        $transportm =  'transportmittel' or "";
        $transportz =  'transportziel' or "";
        $transport =  'transport' or "";
        $priorität =  'Priorität' or "";
        $copy1 =   'copy1' or "";
        $copy2 =   'copy2' or "";
        $weiter1 =   'weiter1' or "";
        $weiter2 =   'weiter2' or "";
        $kurzdiagnose =  'kurzdiagnose' or ""  ;
        $verletzung =  'verletzung'  or "";
        $verbrennung =  'verbrennung'  or "";
        $erkrankung =  'erkrankung'  or "";
        $vergiftung =  'vergiftung' or "";
        $verstrahlung =  'verstrahlung' or "";
        $psyche =  'psyche' or "";
        $bewusstsein =  'bewusstsein' or "";
        $atmung =  'atmung' or "";
        $kreislauf =  'kreislauf' or "";
        $infusion =  'infusion' or "";
        $analgetika =  'analgetika' or "";
        $antidote =  'antidote' or "";
        $sonstigemedikamente =  'sostmedikamente' or "";
        $bemerkungen =  'bemerkungen' or "";

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
        $kurzdiagnose = $_POST['kurzdiagnose'];
        $verletzung = $_POST['verletzung'];
        $verbrennung =  $_POST['verbrennung'];
        $erkrankung =  $_POST['erkrankung'] ;
        $vergiftung =  $_POST['vergiftung'] ;
        $verstrahlung =  $_POST['verstrahlung'] ;
        $psyche =  $_POST['psyche'] ;
        $bewusstsein = $_POST['bewusstsein'];
        $atmung = $_POST['atmung'];
        $kreislauf = $_POST['kreislauf'];
        $infusion =  $_POST['infusion'] ;
        $analgetika =  $_POST['analgetika'] ;
        $antidote =  $_POST['antidote'] ;
        $sonstigemedikamente =  $_POST['sostigemedikamente'] ;
        $bemerkungen =  $_POST['bemerkungen'] ;
        
        //defining variable as error handling
    
        $update = $db->query("UPDATE qrpatients SET datum =  '$date', vorname=  '$firstname', name=  '$lastname', dob=  '$birthdate', nationalitaet =  '$race', 
        sex=  '$sex' , sichtung1=  '$sichtung1' , sichtung2=  '$sichtung2' , sichtung3=  '$sichtung3' , sichtung4=  '$sichtung4' , 
        kategorie1=  '$kategorie1' , kategorie2=  '$kategorie2' , kategorie3=  '$kategorie3' , kategorie4=  '$kategorie4' , 
        transportmittel=  '$transportm' , transportziel=  '$transportz' , transport=  '$transport', ausfertigung1=  '$copy1',  
        ausfertigung2=  '$copy2' , weitergeleitet1=  '$weiter1' , weitergeleitet2=  '$weiter2' , kurzdiagnose=  '$kurzdiagnose' , verletzung=  '$verletzung',  
        verbrennung=  '$verbrennung' , erkrankung=  '$erkrankung' , vergiftunng=  '$vergiftung' , verstrahlung=  '$verstrahlung' , psyche=  '$psyche', 
        bewusstsein=  '$bewusstsein', atmung=  '$atmung', kreislauf=  '$kreislauf', infusion=  '$infusion' , analgetika=  '$analgetika' , antidote=  '$antidote', 
        sonstmedikamente=  '$sonstigemedikamente' , bemerkungen=  '$bemerkungen' WHERE qr = $QRCode");
        $result = $db->exec($query);

        if (!$result) {
            echo "Update failed";
        } else {
            echo "Update successful";
        }

        $db->close();

    }
    ?>