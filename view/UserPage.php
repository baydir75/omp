<?php 
session_start();
?>

<?php require "../model/database.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="ChangeUserInformation.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Welcome to your page !</h1>
    <section>
        <div id="profil">
            <h2>Mes informations personnelles</h2>
            <p>Nom: <?php echo $_SESSION['nom'] ?></p>
            <p>Prenom: <?php echo $_SESSION['prenom'] ?></p>
            <p id="email">Email: <?php echo $_SESSION['email'] ?></p><button id="changeEmail">Modifier Email</button>
            <p>Adresse: <?php echo $_SESSION['address'] ?></p>
            <p>Numero de téléphone: <?php echo $_SESSION['phone'] ?></p>
            <p>Date de naissance: <?php echo $_SESSION['dob'] ?></p>
        </div>
    </section>
    <section>
        <h2>Prochaines permanences</h2>
        </div>
    </section>
    <section>
        <h2>Contactez les admins</h2>
        <p></p>
    </section>
</body>
</html>