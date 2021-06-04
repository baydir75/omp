<?php require "../autoloader.php" ?>
<?php
session_start();

if (isset($_POST['login'])) {
    $connex = mysqli_connect('localhost', 'root', '', 'onzemillepotes');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = new LoginUser;
    $login->logUser($email, $password);
}
else {
    echo "Pas connecté à la base de données";
} 


//fonction si l'utilisateur veut changer de mot de passe
?>