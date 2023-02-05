<?php
$QRCode = $_GET["qr"];

if (isset($_POST['submit'])) {
    $firstname = trim($_POST['Name']);
    $lastname = trim($_POST['Vorname']);
    $birthdate = trim($_POST['Geburtsdatum']);
    $race = trim($_POST['Nationalität']);
    $sex = isset($_POST['geschlecht']) ? $_POST['geschlecht'] : "";
    $sichtung1 = $_POST['sichtung1'];
    $kategorie1 = isset($_POST['kategorie1']) ? $_POST['kategorie1'] : '';
    $sichtung2 = $_POST['sichtung2'];
    $kategorie2 = isset($_POST['kategorie2']) ? $_POST['kategorie2'] : '';
    $sichtung3 = $_POST['sichtung3'];
    $kategorie3 = isset($_POST['kategorie3']) ? $_POST['kategorie3'] : '';
    $sichtung4 = $_POST['sichtung4'];
    $kategorie4 = isset($_POST['kategorie4']) ? $_POST['kategorie4'] : '';
    $transportm = $_POST['Transportmittel'];
    $transportz = $_POST['Transportziel'];
    $transport = isset($_POST['transport[]']) ? (array) $_POST['transport[]'] : array();
        $transport_selected = is_array($transport) ? implode(",", $transport) : '';
    $prio = isset($_POST['Priorität']) ? $_POST['Priorität'] : '';
    $copy1 =  isset($_POST['copy1']) ? $_POST['copy1'] : '';
    $copy2 =  isset($_POST['copy2']) ? $_POST['copy2'] : '';
    $weiter1 =  isset($_POST['weiter1']) ? $_POST['weiter1'] : '';
    $weiter2 =  isset($_POST['weiter2']) ? $_POST['weiter2'] : '';
    $kurzdiagnose = isset($_POST['kurzdiagnose']) ? $_POST['kurzdiagnose'] : '';
    $verletzung = isset($_POST['verletzung']) ? $_POST['verletzung'] : '';
    $verbrennung = isset($_POST['verbrennung']) ? $_POST['verbrennung'] : '';
    $erkrankung = isset($_POST['erkrankung']) ? $_POST['erkrankung'] : '';
    $vergiftung = isset($_POST['vergiftung']) ? $_POST['vergiftung'] : '';
    $verstrahlung = isset($_POST['verstrahlung']) ? $_POST['verstrahlung'] : '';
    $psyche = isset($_POST['psyche']) ? $_POST['psyche'] : '';
    $bewusstseintxt = isset($_POST['bewusstseintxt']) ? $_POST['bewusstseintxt'] : '';
    $atmungtxt = isset($_POST['atmungtxt']) ? $_POST['atmungtxt'] : '';
    $kreislauftxt = isset($_POST['kreislauftxt']) ? $_POST['kreislauftxt'] : '';
    $bewusstsein = isset($_POST['bewusstsein']) ? $_POST['bewusstsein'] : "";
    $atmung = isset($_POST['atmung']) ? $_POST['atmung'] : "";
    $kreislauf = isset ($_POST['kreislauf']) ? $_POST['kreislauf'] : "";
    $infusion = isset($_POST['infusion']) ? $_POST['infusion'] : '';
    $analgetika = isset($_POST['analgetika']) ? $_POST['analgetika'] : '';
    $antidote = isset($_POST['antidote']) ? $_POST['antidote'] : '';
    $sostigemedikamente = isset($_POST['sostigemedikamente']) ? $_POST['sostigemedikamente'] : '';
    $bemerkungen = isset($_POST['bemerkungen']) ? $_POST['bemerkungen'] : '';

    $update = $db->prepare("UPDATE qrpatients SET sichtung1 = ?, kategorie1 = ?, sichtung2 = ?,
                            kategorie2 = ?, sichtung3 = ?, kategorie3 = ?, sichtung4 = ?, kategorie4 = ?, vorname = ?, name = ?, dob = ?, nationalitaet = ?,
                            sex = ?, transportmittel = ?, transportziel = ?, transport = ?, prio = ?, ausfertigung1 = ?, ausfertigung2 = ?, weitergeleitet1 = ?, weitergeleitet2 = ?, 
                            kurzdiagnose = ?, verletzung = ?, verbrennung = ?, erkrankung = ?, vergiftunng =?, verstrahlung =?, psyche =?, image = ?, bewusstsein = ?, atmung = ?,
                            kreislauf = ?, bewusstseintxt = ?, atmungtxt =?, kreislauftxt = ?, infusion = ?, analgetika = ?,
                            antidote = ?, sonstmedikamente = ?, bemerkungen = ? WHERE qr = ?");
    $update->bindValue(1, $sichtung1, SQLITE3_TEXT);
    $update->bindValue(2, $kategorie1, SQLITE3_TEXT);
    $update->bindValue(3, $sichtung2, SQLITE3_TEXT);
    $update->bindValue(4, $kategorie2, SQLITE3_TEXT);
    $update->bindValue(5, $sichtung3, SQLITE3_TEXT);
    $update->bindValue(6, $kategorie3, SQLITE3_TEXT);
    $update->bindValue(7, $sichtung4, SQLITE3_TEXT);
    $update->bindValue(8, $kategorie4, SQLITE3_TEXT);
    $update->bindValue(9, $firstname, SQLITE3_TEXT);
    $update->bindValue(10, $lastname, SQLITE3_TEXT);
    $update->bindValue(11, $birthdate, SQLITE3_TEXT);
    $update->bindValue(12, $race, SQLITE3_TEXT);
    $update->bindValue(13, $sex, SQLITE3_TEXT);
    $update->bindValue(14, $transportm, SQLITE3_TEXT);
    $update->bindValue(15, $transportz, SQLITE3_TEXT);
    $update->bindValue(16, $transport_selected, SQLITE3_TEXT);
    $update->bindValue(17, $prio, SQLITE3_TEXT);
    $update->bindValue(18, $copy1, SQLITE3_TEXT);
    $update->bindValue(19, $copy2, SQLITE3_TEXT);
    $update->bindValue(20, $weiter1, SQLITE3_TEXT);
    $update->bindValue(21, $weiter2, SQLITE3_TEXT);
    $update->bindValue(22, $kurzdiagnose, SQLITE3_TEXT);
    $update->bindValue(23, $verletzung, SQLITE3_TEXT);
    $update->bindValue(24, $verbrennung, SQLITE3_TEXT);
    $update->bindValue(25, $erkrankung, SQLITE3_TEXT);
    $update->bindValue(26, $vergiftung, SQLITE3_TEXT);
    $update->bindValue(27, $verstrahlung, SQLITE3_TEXT);
    $update->bindValue(28, $psyche, SQLITE3_TEXT);
    $update->bindValue(29, $imgContent, SQLITE3_BLOB);
    $update->bindValue(30, $bewusstsein, SQLITE3_TEXT);
    $update->bindValue(31, $atmung, SQLITE3_TEXT);
    $update->bindValue(32, $kreislauf, SQLITE3_TEXT);
    $update->bindValue(33, $bewusstseintxt, SQLITE3_TEXT);
    $update->bindValue(34, $atmungtxt, SQLITE3_TEXT);
    $update->bindValue(35, $kreislauftxt, SQLITE3_TEXT);
    $update->bindValue(36, $infusion, SQLITE3_TEXT);
    $update->bindValue(37, $analgetika, SQLITE3_TEXT);
    $update->bindValue(38, $antidote, SQLITE3_TEXT);
    $update->bindValue(39, $sostigemedikamente, SQLITE3_TEXT);
    $update->bindValue(40, $bemerkungen, SQLITE3_TEXT);
    $update->bindValue(41, $QRCode, SQLITE3_TEXT);

    $result = $update->execute();
    
    if (!$result) {
    echo "Update failed";
    } else {
        echo "Update successful"; 
    }
}

?>