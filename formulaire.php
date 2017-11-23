<?php

session_start();
$homeActive = false;
$inscriptionActive = true;
require 'base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire</title>
</head>
<body>
<div class="container backChampMars">

    <?php
    if (isset($_GET['success'])):?>
            <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
        <?php
    endif;
    ?>

    <form name="form_inscription" method="post" action="inscription.php">

        <h1> Formulaire d'Inscription</h1>

        <h2> A propos de vous</h2>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="civilite">Civilité</label>
            </div>
            <div class="col-xs-12 col-md-2">
                <select id="civilite" name="civilite" class="form-control">
                    <option value="Monsieur">M.</option>
                    <option value="Madame">Mme</option>
                    <option value="Mademoiselle">Mlle</option>
                </select>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="nomParticipant">Nom</label>
            </div>
            <div class="col-xs-12 col-md-2">
                <input type="text" class="form-control" name="nomParticipant" placeholder="Nom..."
                       value="<?php echo isset($_GET['nom']) ? $_GET['nom'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="prenomParticipant">Prenom</label>
            </div>
            <div class="col-xs-12 col-md-2">
                <input type="text" class="form-control" name="prenomParticipant" placeholder="Prenom..."
                       value="<?php echo isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="naissanceParticipant">Date de Naissance</label>
            </div>
            <div class="col-xs-12 col-md-1">
                <input type="text" class="form-control" name="jourNaissanceParticipant" placeholder="Jour..."
                       value="<?php echo isset($_GET['jourNaissance']) ? $_GET['jourNaissance'] : '' ?>">
            </div>
            <div class="col-xs-12 col-md-1">
                <input type="text" class="form-control" name="moisNaissanceParticipant" placeholder="Mois..."
                       value="<?php echo isset($_GET['moisNaissance']) ? $_GET['moisNaissance'] : '' ?>">
            </div>
            <div class="col-xs-12 col-md-1">
                <input type="text" class="form-control" name="anneeNaissanceParticipant" placeholder="Année..."
                       value="<?php echo isset($_GET['anneeNaissance']) ? $_GET['anneeNaissance'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="emailParticipant">Email</label>
            </div>
            <div class="col-xs-12 col-md-3">
                <input type="email" class="form-control" name="emailParticipant" placeholder="Email..."
                       value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>">
            </div>
        </div>

        <div class=" row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="telephoneParticipant">Telephone</label>
            </div>
            <div class="col-xs-12 col-md-2">
                <input type="text" class="form-control" name="telephoneParticipant"
                       placeholder="Téléphone..."
                       value="<?php echo isset($_GET['tel']) ? $_GET['tel'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="adresseParticipant">Adresse</label>
            </div>
            <div class="col-xs-12 col-md-6">
                <input type="text" class="form-control" name="adresseParticipant" placeholder="Adresse..."
                       value="<?php echo isset($_GET['adresse']) ? $_GET['adresse'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="CPparticipant">Code Postal</label>
            </div>
            <div class="col-xs-12 col-md-2">
                <input type="text" class="form-control" name="CPparticipant" placeholder="Code Postal..."
                       value="<?php echo isset($_GET['cp']) ? $_GET['cp'] : '' ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="villeParticipant">Ville</label>
            </div>
            <div class="col-xs-12 col-md-3">
                <input type="text" class="form-control" name="villeParticipant" placeholder="Ville..."
                       value="<?php echo isset($_GET['ville']) ? $_GET['ville'] : '' ?>">
            </div>
        </div>

        <h2> Questions techniques</h2>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-6">
                <label for="polochon">Vous venez avec votre propre polochon?</label>
                <input type="checkbox" id="polochon" name="polochon" value="polochon">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-6">
                <label for="probNez">Avez vous des problèmes au nez? (risque de choc)</label>
                <input type="checkbox" id="probNez" name="probNez" value="probNez">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 col-md-offset-2 col-md-1">
                <label for="soloEquipe">Jouer en </label>
            </div>
            <div class="col-xs-12 col-md-2">
                <select id="soloEquipe" name="soloEquipe" class="form-control">
                    <option value="solo">Solo</option>
                    <option value="equipe">Equipe</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-offset-5 col-md-2">
                <input type="submit" value="Participer"/>
            </div>
        </div>
    </form>
</div>

</body>
</html>


