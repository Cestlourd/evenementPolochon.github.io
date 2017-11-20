<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-inverse" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PolochWar</a>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if ($homeActive == true){?>
                    <li class="active"><a href="index.php">Home</a></li>
                <?php }
                else{ ?>
                    <li><a href="index.php">Home</a></li>
                <?php } ?>

                <?php if ($inscriptionActive == true){?>
                    <li class="active"><a href="formulaire.php">Inscription</a></li>
                <?php }
                else{ ?>
                    <li ><a href="formulaire.php">Inscription</a></li>
                <?php } ?>
            </ul>

            <form class="navbar-form navbar-right" method="post" action="checkAdmin.php">
                <div class="form-group">
                    <label for="usernameAdmin">Username :</label>
                    <input type="text" class="form-control" name="usernameAdmin" placeholder="Username...">
                </div>
                <div class="form-group">
                    <label for="passwordAdmin">Password :</label>
                    <input type="password" class="form-control" name="mdpAdmin" placeholder="******"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login"/>
                </div>
            </form>
        </div>
    </div>
</nav>
</body>
</html>