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
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">Grayscale</h1>
                        <p class="intro-text">A free, responsive, one page Bootstrap theme.
                            <br>Created by Start Bootstrap.</p>
                        <a href="#about" class="btn btn-circle js-scroll-trigger">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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