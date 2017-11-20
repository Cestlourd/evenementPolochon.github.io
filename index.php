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
<div class="container">
    <!-- Intro Header -->
    <header class="masthead backChampMars">
    </header>

    <div class="row">
        <main>
            <section id="FormulaireInscription">

                <?php
                if (isset($_GET["success"])): ?>
                    <div class="row">
                        <p class="alert alert-success col-xs-12 col-md-offset-3 col-md-6"><?php echo $_GET["success"]; ?></p>
                    </div>
                    <?php
                endif;
                ?>

                <?php
                if (isset($_GET['errors'])): ?>
                    <div class="row">
                        <h2 class="text-danger col-xs-12 col-md-offset-3 col-md-6"> Veuillez remplir les champs suivants
                            :</h2>
                        <ul class="list-group">
                            <?php foreach ($_GET['errors'] as $error): ?>
                                <li class="list-group-item list-group-item-danger col-xs-12 col-md-offset-3 col-md-6"><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php
                endif;
                ?>
                <form name="form_inscription" method="post" action="inscription.php">

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="nomParticipant">Nom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" name="nomParticipant" placeholder="Nom..."
                                   value="<?php echo isset($_GET['nom']) ? $_GET['nom'] : '' ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="prenomParticipant">Prenom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" name="prenomParticipant" placeholder="Prenom..."
                                   value="<?php echo isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="emailParticipant">Email</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="email" class="form-control" name="emailParticipant" placeholder="Email..."
                                   value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>">
                        </div>
                    </div>

                    <div class=" row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="telephoneParticipant">Telephone</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" name="telephoneParticipant"
                                   placeholder="Enter Phone Number"
                                   value="<?php echo isset($_GET['tel']) ? $_GET['tel'] : '' ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-offset-2 col-md-6">
                            <label for="coding">Vous venez avec votre propre polochon?</label>
                            <input type="checkbox" id="polochon" name="polochon" value="polochon">
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