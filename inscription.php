<?php

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=evenement_polochon;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_POST)) {
        if ($_POST['nomParticipant'] != '' && $_POST['prenomParticipant'] != '' && $_POST['emailParticipant'] != '' && $_POST['telephoneParticipant'] != '') {

            $nom = $_POST['nomParticipant'];
            $prenom = $_POST['prenomParticipant'];
            $email = $_POST['emailParticipant'];
            $tel = $_POST['telephoneParticipant'];
            if (isset($_POST['polochon'])) {
                $polochon = 1;
            } else {
                $polochon = 0;
            }

            echo $nom . "<br>" . $prenom . "<br>" . $email . "<br>" . $tel . "<br>" . $polochon . "<br>";

            $sql = $bdd->prepare("INSERT INTO polochon (Nom, Prenom, Email, Telephone, Polochon) VALUES (:nom, :prenom, :email, :tel, :polochon)");
            $sql->bindParam(':nom', $nom);
            $sql->bindParam(':prenom', $prenom);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':tel', $tel);
            $sql->bindParam(':polochon', $polochon);
            // use exec() because no results are returned
            $sql->execute();
            echo "New record created successfully";


            $data = [
                "success" => "Vous êtes bien enregistré. A bientôt pour la bataille !"
            ];

            $report = http_build_query($data);

            header('Location: index.html.php?' . $report);
            exit();
        }



        else { //Lorsque un des champs n'est pas rempli comme il se doit
            $data = [
                "nom" => $_POST['nomParticipant'],
                "prenom" => $_POST['prenomParticipant'],
                "email" => $_POST['emailParticipant'],
                "tel" => $_POST['telephoneParticipant'],
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

            $report = http_build_query($data);

            header('Location: index.html.php?' . $report);
            exit();
        }
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//echo "Formulaire operationnel";

?>