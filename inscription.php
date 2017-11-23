<?php

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=evenement_polochon;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST)) {
        if ($_POST['nomParticipant'] != '' && $_POST['prenomParticipant'] != '' && $_POST['emailParticipant'] != '' && $_POST['telephoneParticipant'] != ''
            && $_POST['jourNaissanceParticipant'] != '' && $_POST['moisNaissanceParticipant'] != '' && $_POST['anneeNaissanceParticipant'] != '' && $_POST['adresseParticipant'] != ''
            && $_POST['CPparticipant'] != '' && $_POST['villeParticipant'] != '') {

//            echo "Tout est rempli";

            $civilite = $_POST['civilite'];
            $nom = $_POST['nomParticipant'];
            $prenom = $_POST['prenomParticipant'];
            $email = $_POST['emailParticipant'];
            $tel = $_POST['telephoneParticipant'];
            $naissance = $_POST['jourNaissanceParticipant'] ."/". $_POST['moisNaissanceParticipant'] ."/". $_POST['anneeNaissanceParticipant'] ;
            $adresse = $_POST['adresseParticipant'];
            $cp = $_POST['CPparticipant'];
            $ville = $_POST['villeParticipant'];

            if (isset($_POST['polochon'])) {
                $polochon = 1;
            } else {
                $polochon = 0;
            }

            if (isset($_POST['probNez'])) {
                $pbNez = 1;
            } else {
                $pbNez = 0;
            }

            $equipe = $_POST['soloEquipe'];



//
            echo $civilite . "<br>" . $nom . "<br>" . $prenom . "<br>" . $email . "<br>" . $tel . "<br>";
            echo $naissance . "<br>" . $adresse . "<br>" . $cp . "<br>" . $ville . "<br>";
            echo $polochon . "<br>" . $pbNez . "<br>" . $equipe . "<br>" ;

            $sql = $bdd->prepare(
                "INSERT INTO polochon (Civilite, Nom, Prenom, Naissance, Email, Telephone, Adresse, CP, Ville, Polochon, PbNez, Equipe) 
                          VALUES (:civilite, :nom, :prenom, :naissance, :email, :tel, :adresse, :cp, :ville, :polochon, :pbNez, :equipe)");

            $sql->bindParam(':civilite', $civilite);
            $sql->bindParam(':nom', $nom);
            $sql->bindParam(':prenom', $prenom);
            $sql->bindParam(':naissance', $naissance);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':tel', $tel);
            $sql->bindParam(':adresse', $adresse);
            $sql->bindParam(':cp', $cp);
            $sql->bindParam(':ville', $ville);
            $sql->bindParam(':polochon', $polochon);
            $sql->bindParam(':pbNez', $pbNez);
            $sql->bindParam(':equipe', $equipe);
            // use exec() because no results are returned
            $sql->execute();
            echo "New record created successfully";


            $data = [
                "success" => "Vous êtes bien enregistré. A bientôt pour la bataille !"
            ];

            $report = http_build_query($data);

            header('Location: formulaire.php?' . $report);
            exit();
        }



        else { //Lorsque un des champs n'est pas rempli comme il se doit
            $data = [
                "nom" => $_POST['nomParticipant'],
                "prenom" => $_POST['prenomParticipant'],
                "naissance" => $_POST['jourNaissanceParticipant'] ."/". $_POST['moisNaissanceParticipant'] ."/". $_POST['anneeNaissanceParticipant'],
                "email" => $_POST['emailParticipant'],
                "tel" => $_POST['telephoneParticipant'],
                "adresse" => $_POST['adresseParticipant'],
                "cp" => $_POST['CPparticipant'],
                "ville" => $_POST['villeParticipant'],
                "polochon" => $_POST['polochon'],
                "pbNez" => $_POST['probNez'],
                'errors' => []
            ];

            if ($_POST['nomParticipant'] == '') {
                echo 'PAs de nom';
                array_push($data['errors'], "Nom");
                unset($data["nom"]);
            }

            if ($_POST['prenomParticipant'] == '') {
                echo 'PAs de prenom';
                array_push($data['errors'], "Prenom");
                unset($data["prenom"]);
            }

            if ($_POST['jourNaissanceParticipant'] == '' || $_POST['moisNaissanceParticipant'] == '' || $_POST['anneeNaissanceParticipant'] == '') {
                echo 'PAs de naissance';
                array_push($data['errors'], "Naissance");
                unset($data["naissance"]);
            }

            if ($_POST['emailParticipant'] == '') {
                echo 'PAs de email';
                array_push($data['errors'], "Email");
                unset($data["email"]);
            }

            if ($_POST['telephoneParticipant'] == '') {
                echo 'PAs de telephone';
                array_push($data['errors'], "Telephone");
                unset($data["tel"]);
            }

            if ($_POST['adresseParticipant'] == '') {
                echo 'Pas d\'adresse';
                array_push($data['errors'], "Adresse");
                unset($data["adresse"]);
            }

            if ($_POST['CPparticipant'] == '') {
                echo 'Pas de telephone';
                array_push($data['errors'], "Telephone");
                unset($data["cp"]);
            }

            if ($_POST['villeParticipant'] == '') {
                echo 'Pas de ville';
                array_push($data['errors'], "Ville");
                unset($data["ville"]);
            }

            $report = http_build_query($data);

            header('Location: index.html.php?' . $report);
            exit();
        }
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>