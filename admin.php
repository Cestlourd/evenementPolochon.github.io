<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

<?php

if (isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<h1>Bon retour cher admin</h1>
<h2>Votre email : <?php if (isset($_GET['usernameAdmin'])){echo $_GET['usernameAdmin'];}?></h2>

<a href="?logout"> Se déconnecter</a>

</body>
</html>

