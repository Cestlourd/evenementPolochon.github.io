<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PolochWar 2018</title>

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro|Russo+One|Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fichiers CSS -->

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="css/MyCss.css" rel="stylesheet">

    <!-- Fichiers JS -->

    <script src="js/googleMap.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuIIpLcse3ijTlt22e6uXO1ZmH6XcWR0Q&callback=initMap"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PolochWar</a>

    </div>
</nav>

<div class="container">
    <!-- Intro Header -->
    <header class="masthead">
    </header>

    <div class="row">
        <main>
            <section id="FormulaireInscription">
                <form name="form_inscription" method="post" action="inscription.php">

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="nomParticipant">Nom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" id="nomParticipant" placeholder="Nom...">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="prenomParticipant">Prenom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" id="prenomParticipant" placeholder="Prenom...">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="emailParticipant">Email</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="email" class="form-control" id="emailParticipant" placeholder="Email...">
                        </div>
                    </div>

                    <div class=" row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="telephoneParticipant">Telephone</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" name="telephone" class="form-control" id="telephoneParticipant"
                                   placeholder="Enter Phone Number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-offset-5 col-md-2">
                            <input type="submit" value="Participer" onclick="return val();"/>
                        </div>
                    </div>
                </form>
            </section>

            <section id="lieu">
                <div id="map" style="width:400px;height:400px;"></div>
            </section>


        </main>
    </div>
</div>


</body>
</html>