<?php
  try {
    // Create (connect to) SQLite database in file
    $my_conn = new PDO('sqlite:location.db');

    // check if table 'locations' already exists
    $result = $my_conn->query("SELECT name FROM sqlite_master WHERE type='table' AND name='qrpatients'")->fetch();
    if(empty($result)){
      $my_conn->exec("CREATE TABLE `qrpatients` (
        `qr` varchar(255)  NOT NULL,
        `longitude` varchar(255) default NULL,
        `latitude` varchar(255) default NULL, 
        `farbe` varchar(255) default NULL,
        `datum` datetime default NULL,
        `name` varchar(255) default NULL,
        `vorname` varchar(255) default NULL,
        `dob` date default NULL,
        `sex` varchar(255) default NULL,
        `nationalitaet` varchar(255) default NULL,
        `sichtung1` varchar(255) default NULL,
        `kategorie1` varchar(255) default NULL,
        `sichtung2` varchar(255) default NULL,
        `kategorie2` varchar(255) default NULL,
        `sichtung3` varchar(255) default NULL,
        `kategorie3` varchar(255) default NULL,
        `sichtung4` varchar(255) default NULL,
        `kategorie4` varchar(255) default NULL,
        `transportmittel` varchar(255) default NULL,
        `transportziel` varchar(255) default NULL,
        `transport` varchar(255) default NULL,
        `ausfertigung1` varchar(255) default NULL,
        `weitergeleitet1` varchar(255) default NULL,
        `ausfertigung2` varchar(255) default NULL,
        `weitergeleitet2` varchar(255) default NULL,
        `kurzdiagnose` varchar(255) default NULL,
        `verletzung` varchar(255) default NULL,
        `verbrennung` varchar(255) default NULL,
        `erkrankung` varchar(255) default NULL,
        `vergiftunng` varchar(255) default NULL,
        `verstrahlung` varchar(255) default NULL,
        `psyche` varchar(255) default NULL,
        `bewusstsein` varchar(255) default NULL,
        `atmung` varchar(255) default NULL,
        `kreislauf` varchar(255) default NULL,
        `infusion` varchar(255) default NULL,
        `analgetika` varchar(255) default NULL,
        `antidote` varchar(255) default NULL,
        `sonstmedikamente` varchar(255) default NULL,
        `bemerkungen` TEXT default NULL,
        PRIMARY KEY (`qr`)");
      $my_conn->exec("INSERT INTO qrpatients (qr, longitude, latitude, farbe, name, vorname, sex, nationalitaet,kurzdiagnose)
      VALUES ('1', '12.56', '48.25', 'rot', 'Doe', 'John', 'm', 'deutsch','Lunge kollabiert'), ('2', '12.50', '48.30', 'grün', 'Gruber', 'Lisa', 'f', 'deutsch','Schock')");
    } 
  }
  catch(PDOException $e) 
  {
    // Print PDOException message
    echo $e->getMessage();
    $my_conn = null;
  }

?>