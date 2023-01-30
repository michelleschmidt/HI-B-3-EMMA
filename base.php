<!DOCTYPE html>
<html lang="en">
<?php
    include("data/tablecreation.php");
    $db = new SQLite3('./location.db');
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
        <link rel="stylesheet" href="custom.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
        <script src="https://unpkg.com/markerjs2/markerjs2.js"></script>
</head>
<header class="main-header">
    <div class="container">
        <!-- bootstrap navbar -->
        <nav class="navbar navbar-expand-lg main-nav px-0" >
            
            <!-- company logo -->
            Digitale Anhängekarte für Verletzte/Kranke
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar icon-bar-1"></span>
                <span class="icon-bar icon-bar-2"></span>
                <span class="icon-bar icon-bar-3"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto text-uppercase f1">
                    <li>
                        <a href="search.php" class="active active-first"> QR Scanner</a>
                    </li>
                    <li>
                        <a href="map.php"> Karte </a>
                    </li>
                    <li>
                        <a href="about.php"> Statistik </a>
                    </li>               
                </ul>
            </div>
        </nav>
    </div>         
</header>

