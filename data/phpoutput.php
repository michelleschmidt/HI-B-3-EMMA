<?php
$QRCode = $_GET["qr"];

$stmt = $db->prepare("SELECT * FROM qrpatients WHERE qr = :qr");
$stmt->bindValue(':qr', $QRCode, SQLITE3_TEXT);
$results = $stmt->execute();
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
        'transport' => explode(',', $row['transport']),
        'prio' => $row['prio'],
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
        'bewusstseintxt' => $row['bewusstseintxt'],
        'atmungtxt' => $row['atmungtxt'],
        'kreislauftxt' => $row['kreislauftxt'],
        'infusion' => $row['infusion'],
        'analgetika' => $row['analgetika'],
        'antidote' => $row['antidote'],
        'sonstmedikamente' => $row['sonstmedikamente'],
        'bemerkungen' => $row['bemerkungen'],
        'image' => base64_encode($row['image'])
        );
    };

    if (isset($_POST['Grunddaten_submit'])) {
        $firstname = trim($_POST['Name']);
        $lastname = trim($_POST['Vorname']);
        $birthdate = trim($_POST['Geburtsdatum']);
        $race = trim($_POST['Nationalität']);
        $sex = isset($_POST['geschlecht']) ? $_POST['geschlecht'] : "";

        $update = $db->prepare("UPDATE qrpatients SET vorname = ?, name = ?, dob = ?, nationalitaet = ?,
        sex = ? WHERE qr = ?");
        $update->bindValue(1, $firstname, SQLITE3_TEXT);
        $update->bindValue(2, $lastname, SQLITE3_TEXT);
        $update->bindValue(3, $birthdate, SQLITE3_TEXT);
        $update->bindValue(4, $race, SQLITE3_TEXT);
        $update->bindValue(5, $sex, SQLITE3_TEXT);
        $update->bindValue(6, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
        echo "Update successful";
        }
    }

    if (isset($_POST['Sichtung_submit'])) {
        $sichtung1 = $_POST['sichtung1'];
        $kategorie1 = isset($_POST['kategorie1']) ? $_POST['kategorie1'] : '';
        $sichtung2 = $_POST['sichtung2'];
        $kategorie2 = isset($_POST['kategorie2']) ? $_POST['kategorie2'] : '';
        $sichtung3 = $_POST['sichtung3'];
        $kategorie3 = isset($_POST['kategorie3']) ? $_POST['kategorie3'] : '';
        $sichtung4 = $_POST['sichtung4'];
        $kategorie4 = isset($_POST['kategorie4']) ? $_POST['kategorie4'] : '';

        $update = $db->prepare("UPDATE qrpatients SET sichtung1 = ?, kategorie1 = ?, sichtung2 = ?,
                                kategorie2 = ?, sichtung3 = ?, kategorie3 = ?, sichtung4 = ?, kategorie4 = ? WHERE qr = ?");
        $update->bindValue(1, $sichtung1, SQLITE3_TEXT);
        $update->bindValue(2, $kategorie1, SQLITE3_TEXT);
        $update->bindValue(3, $sichtung2, SQLITE3_TEXT);
        $update->bindValue(4, $kategorie2, SQLITE3_TEXT);
        $update->bindValue(5, $sichtung3, SQLITE3_TEXT);
        $update->bindValue(6, $kategorie3, SQLITE3_TEXT);
        $update->bindValue(7, $sichtung4, SQLITE3_TEXT);
        $update->bindValue(8, $kategorie4, SQLITE3_TEXT);
        $update->bindValue(9, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";
             }
    }

    if (isset($_POST['Transport_submit'])) {
        $transportm = $_POST['Transportmittel'];
        $transportz = $_POST['Transportziel'];
        $transport = isset($_POST['transport[]']) ? (array) $_POST['transport[]'] : array();
            $transport_selected = is_array($transport) ? implode(",", $transport) : '';
        $prio = isset($_POST['Priorität']) ? $_POST['Priorität'] : '';
        
        $update = $db->prepare("UPDATE qrpatients SET transportmittel = ?, transportziel = ?, transport = ?, prio = ? WHERE qr = ?");
        $update->bindValue(1, $transportm, SQLITE3_TEXT);
        $update->bindValue(2, $transportz, SQLITE3_TEXT);
        $update->bindValue(3, $transport_selected, SQLITE3_TEXT);
        $update->bindValue(4, $prio, SQLITE3_TEXT);
        $update->bindValue(5, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";       
        }
    }

    if (isset($_POST['Innen_submit'])) {
        $copy1 =  isset($_POST['copy1']) ? $_POST['copy1'] : '';
        $copy2 =  isset($_POST['copy2']) ? $_POST['copy2'] : '';
        $weiter1 =  isset($_POST['weiter1']) ? $_POST['weiter1'] : '';
        $weiter2 =  isset($_POST['weiter2']) ? $_POST['weiter2'] : '';

        $update = $db->prepare("UPDATE qrpatients SET ausfertigung1 = ?, ausfertigung2 = ?,
                                weitergeleitet1 = ?, weitergeleitet2 = ? WHERE qr = ?");
        $update->bindValue(1, $copy1, SQLITE3_TEXT);
        $update->bindValue(2, $copy2, SQLITE3_TEXT);
        $update->bindValue(3, $weiter1, SQLITE3_TEXT);
        $update->bindValue(4, $weiter2, SQLITE3_TEXT);
        $update->bindValue(5, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";        
        }
    }

    if (isset($_POST['Diagnose_submit'])) {
        $kurzdiagnose = isset($_POST['kurzdiagnose']) ? $_POST['kurzdiagnose'] : '';
        $verletzung = isset($_POST['verletzung']) ? $_POST['verletzung'] : '';
        $verbrennung = isset($_POST['verbrennung']) ? $_POST['verbrennung'] : '';
        $erkrankung = isset($_POST['erkrankung']) ? $_POST['erkrankung'] : '';
        $vergiftung = isset($_POST['vergiftung']) ? $_POST['vergiftung'] : '';
        $verstrahlung = isset($_POST['verstrahlung']) ? $_POST['verstrahlung'] : '';
        $psyche = isset($_POST['psyche']) ? $_POST['psyche'] : '';
        $imgContent = $_POST['imgContent'];
        if(isset($_POST)) {
            echo "POST data is set";
            print_r($_POST);
        } else {
            echo "POST data is not set";
        }
            $imgContent = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgContent));
            file_put_contents('image', $imgContent);
    
        $update = $db->prepare("UPDATE qrpatients SET kurzdiagnose = ?, verletzung = ?, verbrennung = ?, erkrankung = ?, vergiftunng =?, verstrahlung =?, psyche =?, image = ? WHERE qr = ?");
        $update->bindValue(1, $kurzdiagnose, SQLITE3_TEXT);
        $update->bindValue(2, $verletzung, SQLITE3_TEXT);
        $update->bindValue(3, $verbrennung, SQLITE3_TEXT);
        $update->bindValue(4, $erkrankung, SQLITE3_TEXT);
        $update->bindValue(5, $vergiftung, SQLITE3_TEXT);
        $update->bindValue(6, $verstrahlung, SQLITE3_TEXT);
        $update->bindValue(7, $psyche, SQLITE3_TEXT);
        $update->bindValue(8, $imgContent, SQLITE3_BLOB);
        $update->bindValue(9, $QRCode, SQLITE3_TEXT);        
        $result = $update->execute();      

        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";         
        }
    }

    

    if (isset($_POST['Zustand_submit'])) {
        $bewusstseintxt = isset($_POST['bewusstseintxt']) ? $_POST['bewusstseintxt'] : '';
        $atmungtxt = isset($_POST['atmungtxt']) ? $_POST['atmungtxt'] : '';
        $kreislauftxt = isset($_POST['kreislauftxt']) ? $_POST['kreislauftxt'] : '';
        $bewusstsein = isset($_POST['bewusstsein']) ? $_POST['bewusstsein'] : "";
        $atmung = isset($_POST['atmung']) ? $_POST['atmung'] : "";
        $kreislauf = isset($_POST['kreislauf']) ? $_POST['kreislauf'] : "";

        $update = $db->prepare("UPDATE qrpatients SET bewusstsein = ?, atmung = ?,
                                kreislauf = ?, bewusstseintxt = ?, atmungtxt =?, kreislauftxt = ? WHERE qr = ?");
        $update->bindValue(1, $bewusstsein, SQLITE3_TEXT);
        $update->bindValue(2, $atmung, SQLITE3_TEXT);
        $update->bindValue(3, $kreislauf, SQLITE3_TEXT);
        $update->bindValue(4, $bewusstseintxt, SQLITE3_TEXT);
        $update->bindValue(5, $atmungtxt, SQLITE3_TEXT);
        $update->bindValue(6, $kreislauftxt, SQLITE3_TEXT);
        $update->bindValue(7, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";          
        }
    }

    if (isset($_POST['Therapie_submit'])) {

        $infusion = isset($_POST['infusion']) ? $_POST['infusion'] : '';
        $analgetika = isset($_POST['analgetika']) ? $_POST['analgetika'] : '';
        $antidote = isset($_POST['antidote']) ? $_POST['antidote'] : '';
        $sostigemedikamente = isset($_POST['sostigemedikamente']) ? $_POST['sostigemedikamente'] : '';

        $update = $db->prepare("UPDATE qrpatients SET infusion = ?, analgetika = ?,
                                antidote = ?, sonstmedikamente = ? WHERE qr = ?");
        $update->bindValue(1, $infusion, SQLITE3_TEXT);
        $update->bindValue(2, $analgetika, SQLITE3_TEXT);
        $update->bindValue(3, $antidote, SQLITE3_TEXT);
        $update->bindValue(4, $sostigemedikamente, SQLITE3_TEXT);
        $update->bindValue(5, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";        
        }
    }

    if (isset($_POST['Bemerkungen_submit'])) {

        $bemerkungen = isset($_POST['bemerkungen']) ? $_POST['bemerkungen'] : '';

        $update = $db->prepare("UPDATE qrpatients SET bemerkungen = ? WHERE qr = ?");
        $update->bindValue(1, $bemerkungen, SQLITE3_TEXT);
        $update->bindValue(2, $QRCode, SQLITE3_TEXT);
        
        $result = $update->execute();
        
        if (!$result) {
        echo "Update failed";
        } else {
            echo "Update successful";
        }
    }
    ?>

