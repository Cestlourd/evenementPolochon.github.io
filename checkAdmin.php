<?php
session_start();

echo "Bonjour page de check admin";

try {
    $bdd = new PDO('mysql:host=localhost;dbname=evenement_polochon;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST)) {

        if ($_POST['usernameAdmin'] != '' && $_POST['mdpAdmin'] != '') {

            $sql = 'SELECT * FROM administrateur WHERE login= :login LIMIT 1';
            $prep = $bdd->prepare($sql);
            $prep->bindValue(':login', $_POST['usernameAdmin']);
            $prep->execute();

            $userArray = $prep->fetch(PDO::FETCH_OBJ);

            if ($userArray->password == $_POST['mdpAdmin']){
                header('Location: admin.php?login='.$_POST['usernameAdmin']);
                exit();
            }
//            else{
//                echo "Mauvais mdp";
//            }
        }
    }


} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//if (isset($_POST)) {
//
//
//
//    if ($_POST['email'] == ADMIN_EMAIL && $_POST['mdp'] == ADMIN_MDP) {
//        $_SESSION['admin'] = true;
//        $_SESSION['email'] = $_POST['email'];
//        header('Location: success.php?email='.$_POST['email']);
//        exit();
//    } else {
//        $data = [
//            "email" => $_POST['email'],
//            'errors' => ["Combinaison Email/Password invalide"]
//        ];
//
//        $report = http_build_query($data);
//
//        header('Location: form.php?'. $report );
//        exit();
//    }
//}


?>