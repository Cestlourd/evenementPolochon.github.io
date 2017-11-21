<?php

session_start();

$homeActive = true;
$inscriptionActive = false;
require 'base.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PolochWar 2018</title>

    <!-- Fichiers JS -->
    <script src="js/googleMap.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuIIpLcse3ijTlt22e6uXO1ZmH6XcWR0Q&callback=initMap"></script>

</head>
<body>
    <!-- Intro Header -->
    <header class="masthead">
    </header>

    <div class="container">
    <div class="row">
        <main>

            <section id="lieu">
                <div id="map" style="width:400px;height:400px;"></div>
            </section>


        </main>
    </div>
</div>


</body>
</html>